<?php declare(strict_types = 1);

use Tester\Assert;
use Typertion\Php\ArrayTypeAssert;

require __DIR__ . '/bootstrap.php';

Assert::true(ArrayTypeAssert::bool(['bool' => true], 'bool'));

Assert::throws(function (): void {
	ArrayTypeAssert::bool(['bool' => true], 'boolx');
}, \Typertion\Php\Exception\OutOfBoundsException::class, 'Undefined index "boolx", did you mean "bool"?');

