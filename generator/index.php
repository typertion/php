<?php declare(strict_types = 1);

use Generator\PhpGenerator;
use Generator\SignatureFactory;
use Typertion\Generator\Manifest\JsonManifest;
use Typertion\Generator\SignatureProcessor;

require __DIR__ . '/../vendor/autoload.php';

$basic = [
	'array',
	'array|null',
	'object',
	'object|null',
	'array|object',
	'array|object|null',
	'string',
	'string|null',
	'int',
	'int|null',
	'float',
	'float|null',
	'int|float',
	'int|float|null',
	'bool',
	'bool|null',
	'callable',
	'callable|null',
	'iterable',
	'iterable|null',
];

$special = [
	'scalar',
	'scalar|null',
	'numeric',
	'numeric|null',
	'floatish',
	'floatish|null',
	'integerish',
	'integerish|null',
	'instance',
	'instance|null',
	'instanceOf',
	'instanceOf|null',
	'classString',
	'classString|null',
	'classStringOf',
	'classStringOf|null',
];

(new PhpGenerator())->generate(
	(new SignatureProcessor(SignatureFactory::create()))->process(
		...$basic,
		...$special,
	)
);

(new JsonManifest($basic))->save(__DIR__ . '/manifest.json');
