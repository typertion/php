<?php declare(strict_types = 1);

use Tester\Assert;

function success(string $name, string $type, callable $callback, mixed $value, mixed ... $arguments): void
{
	Assert::$counter++;

	try {
		$callback($value, ...$arguments);
	} catch (Throwable) {
		Assert::fail(sprintf('%s: Exception thrown when pass "%s", debug type: "%s".', $name, $type, get_debug_type($value)));
	}
}

function fail(string $name, string $type, callable $callback, mixed $value, mixed ... $arguments): void
{
	Assert::$counter++;

	try {
		$callback($value, ...$arguments);
	} catch (Throwable) {
		return;
	}

	Assert::fail(sprintf('%s: Exception did not throw when pass "%s", debug type: "%s".', $name, $type, get_debug_type($value)));
}

/**
 * @param string[] $require
 * @param string[] $exclude
 * @return array{value: mixed, type: string}[]
 */
function getByTypes(array $require = [], array $exclude = []): array
{
	$values = [
		'string' => 'foo',
		'bool' => true,
		'null' => null,
		'int' => 1,
		'float' => 15.7,
		'object' => new stdClass(),
		'array' => [],
		'callable' => function (): void {},
		'iterable' => (fn (): Generator => yield 'x')(),
	];

	foreach (array_merge($require, $exclude) as $name) {
		if (!array_key_exists($name, $values)) {
			throw new OutOfBoundsException(sprintf('Type %s does not exist.', $name));
		}
	}

	if ($exclude) {
		$require = array_filter(
			array_keys($values),
			fn (string $key) => !in_array($key, $exclude, true),
		);
	}

	return array_map(
		fn (string $key) => ['value' => $values[$key], 'type' => $key],
		$require,
	);
}

/**
 * @param string[] $types
 * @return array{ success: array{value: mixed, type: string}[], fail: array{value: mixed, type: string}[] }
 */
function createCaseByTypes(array $types): array
{
	return [
		'success' => getByTypes($types),
		'fail' => getByTypes(exclude: $types),
	];
}
