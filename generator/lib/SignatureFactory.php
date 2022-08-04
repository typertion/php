<?php declare(strict_types = 1);

namespace Generator;

use Typertion\Generator\Signature\Signature;

final class SignatureFactory
{

	public static function create(): Signature
	{
		$signature = new Signature();

		foreach (['float', 'int', 'string', 'object', 'bool', 'callable'] as $type) {
			$signature->addType($type)
				->setReturnType($type)
				->addValidator('\is_' . $type . '($value)');
		}

		$signature->addType('array')
			->setReturnType('array')
			->setReturnTypeComment('mixed[]')
			->addValidator('\is_array($value)');

		$signature->addType('iterable')
			->setReturnType('iterable')
			->setReturnTypeComment('iterable<mixed>')
			->addValidator('\is_iterable($value)');

		$signature->addType('scalar')
			->setReturnType($types = ['int', 'float', 'string', 'bool'])
			->addValidator('\is_scalar($value)')
			->conflict($types);

		$signature->addType('numeric')
			->setReturnType(['int|float|string'])
			->addValidator('\is_numeric($value)');

		$signature->addType('integerish')
			->setReturnType('int')
			->conflict(['int', 'string'])
			->addValidator('Validator::integerish($value)', 2);

		$signature->addType('floatish')
			->setReturnType('float')
			->conflict(['float', 'string'])
			->addValidator('Validator::floatish($value)', 2);

		$signature->addType('null')
			->setReturnType('null')
			->addValidator('$value === null');

		$signature->addType('classString')
			->setReturnType('string')
			->conflict('string')
			->addValidator('Validator::classString($value)', 2)
			->setReturnTypeComment('class-string')
			->setExpectedType('class-string');

		$signature->addType('classStringOf')
			->addComment('@template TClassString')
			->addParameter('type', 'string', 'class-string<TClassString>')
			->setReturnType('string')
			->conflict('string')
			->addValidator('Validator::classStringOf($value, $type)', 2)
			->setReturnTypeComment('class-string<TClassString>')
			->setExpectedType("class-string<' . \$type . '>");

		$signature->addType('instance')
			->addComment('@deprecated use instanceOf instead')
			->addComment('@template TType of object')
			->addParameter('type', 'string', 'class-string<TType>')
			->setReturnType('object')
			->addValidator('$value instanceof $type', 2)
			->setReturnTypeComment('TType')
			->setExpectedType("class-string<' . \$type . '>");

		$signature->addType('instanceOf')
			->addComment('@template TType of object')
			->addParameter('type', 'string', 'class-string<TType>')
			->setReturnType('object')
			->addValidator('$value instanceof $type', 2)
			->setReturnTypeComment('TType')
			->setExpectedType("class-string<' . \$type . '>");

		return $signature;
	}

}
