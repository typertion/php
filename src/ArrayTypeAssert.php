<?php

declare(strict_types=1);

namespace Typertion\Php;

use Typertion\Php\Exception\OutOfBoundsException;

class ArrayTypeAssert
{
	/**
	 * @param mixed[] $array
	 * @return mixed[]
	 */
	public static function array(array $array, int|string $key, ?string $label = null): array
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::array($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @return mixed[]|null
	 */
	public static function arrayOrNull(array $array, int|string $key, ?string $label = null): ?array
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::arrayOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function object(array $array, int|string $key, ?string $label = null): object
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::object($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function objectOrNull(array $array, int|string $key, ?string $label = null): ?object
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::objectOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @return mixed[]|object
	 */
	public static function arrayOrObject(array $array, int|string $key, ?string $label = null): array|object
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::arrayOrObject($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @return mixed[]|object|null
	 */
	public static function arrayOrObjectOrNull(array $array, int|string $key, ?string $label = null): array|object|null
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::arrayOrObjectOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function string(array $array, int|string $key, ?string $label = null): string
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::string($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function stringOrNull(array $array, int|string $key, ?string $label = null): ?string
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::stringOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function int(array $array, int|string $key, ?string $label = null): int
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::int($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function intOrNull(array $array, int|string $key, ?string $label = null): ?int
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::intOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function float(array $array, int|string $key, ?string $label = null): float
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::float($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function floatOrNull(array $array, int|string $key, ?string $label = null): ?float
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::floatOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function intOrFloat(array $array, int|string $key, ?string $label = null): int|float
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::intOrFloat($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function intOrFloatOrNull(array $array, int|string $key, ?string $label = null): int|float|null
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::intOrFloatOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function bool(array $array, int|string $key, ?string $label = null): bool
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::bool($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function boolOrNull(array $array, int|string $key, ?string $label = null): ?bool
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::boolOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function callable(array $array, int|string $key, ?string $label = null): callable
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::callable($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function callableOrNull(array $array, int|string $key, ?string $label = null): ?callable
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::callableOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @return iterable<mixed>
	 */
	public static function iterable(array $array, int|string $key, ?string $label = null): iterable
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::iterable($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @return iterable<mixed>|null
	 */
	public static function iterableOrNull(array $array, int|string $key, ?string $label = null): ?iterable
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::iterableOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function scalar(array $array, int|string $key, ?string $label = null): int|float|string|bool
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::scalar($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function scalarOrNull(array $array, int|string $key, ?string $label = null): int|float|string|bool|null
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::scalarOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function numeric(array $array, int|string $key, ?string $label = null): int|float|string
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::numeric($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function numericOrNull(array $array, int|string $key, ?string $label = null): int|float|string|null
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::numericOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function floatish(array $array, int|string $key, ?string $label = null): float
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::floatish($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function floatishOrNull(array $array, int|string $key, ?string $label = null): ?float
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::floatishOrNull($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function integerish(array $array, int|string $key, ?string $label = null): int
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::integerish($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 */
	public static function integerishOrNull(array $array, int|string $key, ?string $label = null): ?int
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::integerishOrNull($array[$key], $label);
	}


	/**
	 * @deprecated use instanceOf instead
	 * @template TType of object
	 * @param mixed[] $array
	 * @param class-string<TType> $type
	 * @return TType
	 */
	public static function instance(array $array, int|string $key, string $type, ?string $label = null): object
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::instance($array[$key], $type, $label);
	}


	/**
	 * @deprecated use instanceOf instead
	 * @template TType of object
	 * @param mixed[] $array
	 * @param class-string<TType> $type
	 * @return TType|null
	 */
	public static function instanceOrNull(array $array, int|string $key, string $type, ?string $label = null): ?object
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::instanceOrNull($array[$key], $type, $label);
	}


	/**
	 * @template TType of object
	 * @param mixed[] $array
	 * @param class-string<TType> $type
	 * @return TType
	 */
	public static function instanceOf(array $array, int|string $key, string $type, ?string $label = null): object
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::instanceOf($array[$key], $type, $label);
	}


	/**
	 * @template TType of object
	 * @param mixed[] $array
	 * @param class-string<TType> $type
	 * @return TType|null
	 */
	public static function instanceOfOrNull(array $array, int|string $key, string $type, ?string $label = null): ?object
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::instanceOfOrNull($array[$key], $type, $label);
	}


	/**
	 * @param mixed[] $array
	 * @return class-string
	 */
	public static function classString(array $array, int|string $key, ?string $label = null): string
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::classString($array[$key], $label);
	}


	/**
	 * @param mixed[] $array
	 * @return class-string|null
	 */
	public static function classStringOrNull(array $array, int|string $key, ?string $label = null): ?string
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::classStringOrNull($array[$key], $label);
	}


	/**
	 * @template TClassString
	 * @param mixed[] $array
	 * @param class-string<TClassString> $type
	 * @return class-string<TClassString>
	 */
	public static function classStringOf(array $array, int|string $key, string $type, ?string $label = null): string
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::classStringOf($array[$key], $type, $label);
	}


	/**
	 * @template TClassString
	 * @param mixed[] $array
	 * @param class-string<TClassString> $type
	 * @return class-string<TClassString>|null
	 */
	public static function classStringOfOrNull(array $array, int|string $key, string $type, ?string $label = null): ?string
	{
		if (array_key_exists($key, $array)) {
			throw OutOfBoundsException::create($key, $array);
		}

		return TypeAssert::classStringOfOrNull($array[$key], $type, $label);
	}
}
