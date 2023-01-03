<?php

declare(strict_types=1);

namespace Typertion\Php;

use Typertion\Php\Exception\OutOfBoundsException;

class ArrayTypeAssert
{
	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @return mixed[]
	 */
	public static function array(array $array, $key, $label = null): array
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::array($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @return mixed[]|null
	 */
	public static function arrayOrNull(array $array, $key, $label = null): ?array
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::arrayOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function object(array $array, $key, $label = null): object
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::object($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function objectOrNull(array $array, $key, $label = null): ?object
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::objectOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @return mixed[]|object
	 */
	public static function arrayOrObject(array $array, $key, $label = null)
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::arrayOrObject($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @return mixed[]|object|null
	 */
	public static function arrayOrObjectOrNull(array $array, $key, $label = null)
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::arrayOrObjectOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function string(array $array, $key, $label = null): string
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::string($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function stringOrNull(array $array, $key, $label = null): ?string
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::stringOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function int(array $array, $key, $label = null): int
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::int($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function intOrNull(array $array, $key, $label = null): ?int
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::intOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function float(array $array, $key, $label = null): float
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::float($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function floatOrNull(array $array, $key, $label = null): ?float
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::floatOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @return int|float
	 */
	public static function intOrFloat(array $array, $key, $label = null)
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::intOrFloat($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @return int|float|null
	 */
	public static function intOrFloatOrNull(array $array, $key, $label = null)
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::intOrFloatOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function bool(array $array, $key, $label = null): bool
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::bool($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function boolOrNull(array $array, $key, $label = null): ?bool
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::boolOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function callable(array $array, $key, $label = null): callable
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::callable($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function callableOrNull(array $array, $key, $label = null): ?callable
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::callableOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @return iterable<mixed>
	 */
	public static function iterable(array $array, $key, $label = null): iterable
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::iterable($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @return iterable<mixed>|null
	 */
	public static function iterableOrNull(array $array, $key, $label = null): ?iterable
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::iterableOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @return int|float|string|bool
	 */
	public static function scalar(array $array, $key, $label = null)
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::scalar($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @return int|float|string|bool|null
	 */
	public static function scalarOrNull(array $array, $key, $label = null)
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::scalarOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @return int|float|string
	 */
	public static function numeric(array $array, $key, $label = null)
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::numeric($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @return int|float|string|null
	 */
	public static function numericOrNull(array $array, $key, $label = null)
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::numericOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function floatish(array $array, $key, $label = null): float
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::floatish($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function floatishOrNull(array $array, $key, $label = null): ?float
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::floatishOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function integerish(array $array, $key, $label = null): int
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::integerish($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function integerishOrNull(array $array, $key, $label = null): ?int
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::integerishOrNull($array[$key], $label);
	}


	/**
	 * @deprecated use instanceOf instead
	 * @template TType of object
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @param class-string<TType> $type
	 * @return TType
	 */
	public static function instance(array $array, $key, string $type, $label = null): object
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::instance($array[$key], $type, $label);
	}


	/**
	 * @deprecated use instanceOf instead
	 * @template TType of object
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @param class-string<TType> $type
	 * @return TType|null
	 */
	public static function instanceOrNull(array $array, $key, string $type, $label = null): ?object
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::instanceOrNull($array[$key], $type, $label);
	}


	/**
	 * @template TType of object
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @param class-string<TType> $type
	 * @return TType
	 */
	public static function instanceOf(array $array, $key, string $type, $label = null): object
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::instanceOf($array[$key], $type, $label);
	}


	/**
	 * @template TType of object
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @param class-string<TType> $type
	 * @return TType|null
	 */
	public static function instanceOfOrNull(array $array, $key, string $type, $label = null): ?object
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::instanceOfOrNull($array[$key], $type, $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @return class-string
	 */
	public static function classString(array $array, $key, $label = null): string
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::classString($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @return class-string|null
	 */
	public static function classStringOrNull(array $array, $key, $label = null): ?string
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::classStringOrNull($array[$key], $label);
	}


	/**
	 * @template TClassString
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @param class-string<TClassString> $type
	 * @return class-string<TClassString>
	 */
	public static function classStringOf(array $array, $key, string $type, $label = null): string
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::classStringOf($array[$key], $type, $label);
	}


	/**
	 * @template TClassString
	 * @param mixed[] $array
	 * @param int|string $key
	 * @param string|(callable(): string|null)|null $label
	 * @param class-string<TClassString> $type
	 * @return class-string<TClassString>|null
	 */
	public static function classStringOfOrNull(array $array, $key, string $type, $label = null): ?string
	{
		if (!\array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array, $label);
		}

		return TypeAssert::classStringOfOrNull($array[$key], $type, $label);
	}
}
