<?php

declare(strict_types=1);

namespace Typertion\Php;

use Typertion\Php\Exception\AssertionFailedException;
use Typertion\Php\Helper\Validator;

class TypeAssert
{
	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @return mixed[]
	 */
	public static function array($value, $label = null): array
	{
		if (\is_array($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'array', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @return mixed[]|null
	 */
	public static function arrayOrNull($value, $label = null): ?array
	{
		if (\is_array($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'array|null', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function object($value, $label = null): object
	{
		if (\is_object($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'object', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function objectOrNull($value, $label = null): ?object
	{
		if (\is_object($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'object|null', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @return mixed[]|object
	 */
	public static function arrayOrObject($value, $label = null)
	{
		if (\is_array($value) || \is_object($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'array|object', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @return mixed[]|object|null
	 */
	public static function arrayOrObjectOrNull($value, $label = null)
	{
		if (\is_array($value) || \is_object($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'array|object|null', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function string($value, $label = null): string
	{
		if (\is_string($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'string', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function stringOrNull($value, $label = null): ?string
	{
		if (\is_string($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'string|null', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function int($value, $label = null): int
	{
		if (\is_int($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function intOrNull($value, $label = null): ?int
	{
		if (\is_int($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|null', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function float($value, $label = null): float
	{
		if (\is_float($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'float', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function floatOrNull($value, $label = null): ?float
	{
		if (\is_float($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'float|null', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @return int|float
	 */
	public static function intOrFloat($value, $label = null)
	{
		if (\is_int($value) || \is_float($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|float', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @return int|float|null
	 */
	public static function intOrFloatOrNull($value, $label = null)
	{
		if (\is_int($value) || \is_float($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|float|null', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function bool($value, $label = null): bool
	{
		if (\is_bool($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'bool', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function boolOrNull($value, $label = null): ?bool
	{
		if (\is_bool($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'bool|null', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function callable($value, $label = null): callable
	{
		if (\is_callable($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'callable', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function callableOrNull($value, $label = null): ?callable
	{
		if (\is_callable($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'callable|null', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @return iterable<mixed>
	 */
	public static function iterable($value, $label = null): iterable
	{
		if (\is_iterable($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'iterable', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @return iterable<mixed>|null
	 */
	public static function iterableOrNull($value, $label = null): ?iterable
	{
		if (\is_iterable($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'iterable|null', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @return int|float|string|bool
	 */
	public static function scalar($value, $label = null)
	{
		if (\is_scalar($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|float|string|bool', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @return int|float|string|bool|null
	 */
	public static function scalarOrNull($value, $label = null)
	{
		if (\is_scalar($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|float|string|bool|null', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @return int|float|string
	 */
	public static function numeric($value, $label = null)
	{
		if (\is_numeric($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|float|string', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @return int|float|string|null
	 */
	public static function numericOrNull($value, $label = null)
	{
		if (\is_numeric($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|float|string|null', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function floatish($value, $label = null): float
	{
		if (Validator::floatish($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'float', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function floatishOrNull($value, $label = null): ?float
	{
		if ($value === null || Validator::floatish($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'float|null', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function integerish($value, $label = null): int
	{
		if (Validator::integerish($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function integerishOrNull($value, $label = null): ?int
	{
		if ($value === null || Validator::integerish($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|null', $label);
	}


	/**
	 * @deprecated use instanceOf instead
	 * @template TType of object
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @param class-string<TType> $type
	 * @return TType
	 */
	public static function instance($value, string $type, $label = null): object
	{
		if ($value instanceof $type) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string<' . $type . '>', $label);
	}


	/**
	 * @deprecated use instanceOf instead
	 * @template TType of object
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @param class-string<TType> $type
	 * @return TType|null
	 */
	public static function instanceOrNull($value, string $type, $label = null): ?object
	{
		if ($value === null || $value instanceof $type) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string<' . $type . '>|null', $label);
	}


	/**
	 * @template TType of object
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @param class-string<TType> $type
	 * @return TType
	 */
	public static function instanceOf($value, string $type, $label = null): object
	{
		if ($value instanceof $type) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string<' . $type . '>', $label);
	}


	/**
	 * @template TType of object
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @param class-string<TType> $type
	 * @return TType|null
	 */
	public static function instanceOfOrNull($value, string $type, $label = null): ?object
	{
		if ($value === null || $value instanceof $type) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string<' . $type . '>|null', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @return class-string
	 */
	public static function classString($value, $label = null): string
	{
		if (Validator::classString($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string', $label);
	}


	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @return class-string|null
	 */
	public static function classStringOrNull($value, $label = null): ?string
	{
		if ($value === null || Validator::classString($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string|null', $label);
	}


	/**
	 * @template TClassString
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @param class-string<TClassString> $type
	 * @return class-string<TClassString>
	 */
	public static function classStringOf($value, string $type, $label = null): string
	{
		if (Validator::classStringOf($value, $type)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string<' . $type . '>', $label);
	}


	/**
	 * @template TClassString
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 * @param class-string<TClassString> $type
	 * @return class-string<TClassString>|null
	 */
	public static function classStringOfOrNull($value, string $type, $label = null): ?string
	{
		if ($value === null || Validator::classStringOf($value, $type)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string<' . $type . '>|null', $label);
	}
}
