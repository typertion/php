<?php declare(strict_types = 1);

namespace Generator;

use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\Printer;
use Nette\Utils\FileSystem;
use Nette\Utils\Type;
use Typertion\Generator\Generator\GenerateType;

final class PhpGenerator {

	/**
	 * @param GenerateType[] $types
	 */
	public function generate(array $types): void
	{
		$this->generateTypeAssert($types);
		$this->generateArrayTypeAssert($types);
	}

	/**
	 * @param GenerateType[] $types
	 */
	private function generateTypeAssert(array $types): void
	{
		$file = new PhpFile();
		$file->setStrictTypes();

		$namespace = $file->addNamespace('Typertion\Php');
		$namespace->addUse('Typertion\Php\Exception\AssertionFailedException');
		$namespace->addUse('Typertion\Php\Helper\Validator');
		$class = $namespace->addClass('TypeAssert');

		foreach ($types as $type) {
			$method = $class->addMethod($type->name)
				->setStatic();

			foreach ($type->comments as $comment) {
				$method->addComment($comment);
			}

			$method->addParameter('value');
//				->setType('mixed'); // php 8.0

			$method->addComment('@param mixed $value');

			foreach ($type->parameters as $parameter) {
				$method->addParameter($parameter->name)
					->setType($parameter->getType());

				if ($commentType = $parameter->getCommentType()) {
					$method->addComment(sprintf('@param %s $%s', $commentType, $parameter->name));
				}
			}

			$method->addParameter('label', null)
				->setType('?string');

			if ($type->hasReturnTypeComment()) {
				$method->addComment(sprintf('@return %s', $type->returnTypesCommentToString()));
			}

			if ($type->hasValidationCondition()) {
				$method->addBody(sprintf('if (%s) {', $type->getValidationCondition()));
				$method->addBody("\treturn \$value;");
				$method->addBody('}');
				$method->addBody('');
			}

			$method->addBody(
				sprintf(
					'throw AssertionFailedException::create($value, \'%s\', $label);',
					$type->expectedTypesCommentToString()
				)
			);

			$method->setReturnType($type->getReturnType());
		}

		FileSystem::write(
			__DIR__ . '/../../src/TypeAssert.php',
			(new Printer())->printFile($file),
		);
	}

	/**
	 * @param GenerateType[] $types
	 */
	private function generateArrayTypeAssert(array $types): void
	{
		$file = new PhpFile();
		$file->setStrictTypes();

		$namespace = $file->addNamespace('Typertion\Php');
		$namespace->addUse('Typertion\Php\Exception\OutOfBoundsException');
		$class = $namespace->addClass('ArrayTypeAssert');

		foreach ($types as $type) {
			$method = $class->addMethod($type->name)
				->setStatic();

			foreach ($type->comments as $comment) {
				$method->addComment($comment);
			}

			$method->addParameter('array')
				->setType('array');

			$method->addParameter('key');
//				->setType('int|string'); -- php 8.0

			$method->addComment('@param mixed[] $array');
			$method->addComment('@param int|string $key');

			$signatureCall = [];

			foreach ($type->parameters as $parameter) {
				$method->addParameter($parameter->name)
					->setType($parameter->type);


				$signatureCall[] = '$' . $parameter->name;

				if ($commentType = $parameter->commentType) {
					$method->addComment(sprintf('@param %s $%s', $commentType, $parameter->name));
				}
			}

			$method->addParameter('label', null)
				->setType('?string');

			if ($type->hasReturnTypeComment()) {
				$method->addComment(sprintf('@return %s', $type->returnTypesCommentToString()));
			}

			$method->addBody('if (!\array_key_exists($key, $array)) {');
			$method->addBody("\tthrow OutOfBoundsException::create(\$key, \$array);");
			$method->addBody('}');

			$method->addBody('');


			$signatureCall = $signatureCall ? ', ' . implode(', ', $signatureCall) : '';
			$method->addBody(sprintf('return TypeAssert::%s($array[$key]%s, $label);', $method->getName(), $signatureCall));

			$method->setReturnType($type->getReturnType());
		}

		FileSystem::write(
			__DIR__ . '/../../src/ArrayTypeAssert.php',
			(new Printer())->printFile($file),
		);
	}

}
