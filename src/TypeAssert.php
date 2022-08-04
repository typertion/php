<?php

declare(strict_types=1);

namespace Typertion\Php;

use Typertion\Php\Exception\AssertionFailedException;
use Typertion\Php\Helper\Validator;

class TypeAssert
{
	/**
	 * @param mixed $value
	 * @return mixed[]
	 */
	public static function array($value, ?string $label = null): array
	{
		if (\is_array($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'array', $label);
	}


	/**
	 * @param mixed $value
	 * @return mixed[]|null
	 */
	public static function arrayOrNull($value, ?string $label = null): ?array
	{
		if (\is_array($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'array|null', $label);
	}


	/**
	 * @param mixed $value
	 */
	public static function object($value, ?string $label = null): object
	{
		if (\is_object($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'object', $label);
	}


	/**
	 * @param mixed $value
	 */
	public static function objectOrNull($value, ?string $label = null): ?object
	{
		if (\is_object($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'object|null', $label);
	}


	/**
	 * @param mixed $value
	 * @return mixed[]|object
	 */
	public static function arrayOrObject($value, ?string $label = null)
	{
		if (\is_array($value) || \is_object($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'array|object', $label);
	}


	/**
	 * @param mixed $value
	 * @return mixed[]|object|null
	 */
	public static function arrayOrObjectOrNull($value, ?string $label = null)
	{
		if (\is_array($value) || \is_object($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'array|object|null', $label);
	}


	/**
	 * @param mixed $value
	 */
	public static function string($value, ?string $label = null): string
	{
		if (\is_string($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'string', $label);
	}


	/**
	 * @param mixed $value
	 */
	public static function stringOrNull($value, ?string $label = null): ?string
	{
		if (\is_string($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'string|null', $label);
	}


	/**
	 * @param mixed $value
	 */
	public static function int($value, ?string $label = null): int
	{
		if (\is_int($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int', $label);
	}


	/**
	 * @param mixed $value
	 */
	public static function intOrNull($value, ?string $label = null): ?int
	{
		if (\is_int($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|null', $label);
	}


	/**
	 * @param mixed $value
	 */
	public static function float($value, ?string $label = null): float
	{
		if (\is_float($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'float', $label);
	}


	/**
	 * @param mixed $value
	 */
	public static function floatOrNull($value, ?string $label = null): ?float
	{
		if (\is_float($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'float|null', $label);
	}


	/**
	 * @param mixed $value
	 * @return int|float
	 */
	public static function intOrFloat($value, ?string $label = null)
	{
		if (\is_int($value) || \is_float($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|float', $label);
	}


	/**
	 * @param mixed $value
	 * @return int|float|null
	 */
	public static function intOrFloatOrNull($value, ?string $label = null)
	{
		if (\is_int($value) || \is_float($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|float|null', $label);
	}


	/**
	 * @param mixed $value
	 */
	public static function bool($value, ?string $label = null): bool
	{
		if (\is_bool($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'bool', $label);
	}


	/**
	 * @param mixed $value
	 */
	public static function boolOrNull($value, ?string $label = null): ?bool
	{
		if (\is_bool($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'bool|null', $label);
	}


	/**
	 * @param mixed $value
	 */
	public static function callable($value, ?string $label = null): callable
	{
		if (\is_callable($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'callable', $label);
	}


	/**
	 * @param mixed $value
	 */
	public static function callableOrNull($value, ?string $label = null): ?callable
	{
		if (\is_callable($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'callable|null', $label);
	}


	/**
	 * @param mixed $value
	 * @return iterable<mixed>
	 */
	public static function iterable($value, ?string $label = null): iterable
	{
		if (\is_iterable($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'iterable', $label);
	}


	/**
	 * @param mixed $value
	 * @return iterable<mixed>|null
	 */
	public static function iterableOrNull($value, ?string $label = null): ?iterable
	{
		if (\is_iterable($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'iterable|null', $label);
	}


	/**
	 * @param mixed $value
	 * @return int|float|string|bool
	 */
	public static function scalar($value, ?string $label = null)
	{
		if (\is_scalar($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|float|string|bool', $label);
	}


	/**
	 * @param mixed $value
	 * @return int|float|string|bool|null
	 */
	public static function scalarOrNull($value, ?string $label = null)
	{
		if (\is_scalar($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|float|string|bool|null', $label);
	}


	/**
	 * @param mixed $value
	 * @return int|float|string
	 */
	public static function numeric($value, ?string $label = null)
	{
		if (\is_numeric($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|float|string', $label);
	}


	/**
	 * @param mixed $value
	 * @return int|float|string|null
	 */
	public static function numericOrNull($value, ?string $label = null)
	{
		if (\is_numeric($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|float|string|null', $label);
	}


	/**
	 * @param mixed $value
	 */
	public static function floatish($value, ?string $label = null): float
	{
		if (Validator::floatish($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'float', $label);
	}


	/**
	 * @param mixed $value
	 */
	public static function floatishOrNull($value, ?string $label = null): ?float
	{
		if ($value === null || Validator::floatish($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'float|null', $label);
	}


	/**
	 * @param mixed $value
	 */
	public static function integerish($value, ?string $label = null): int
	{
		if (Validator::integerish($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int', $label);
	}


	/**
	 * @param mixed $value
	 */
	public static function integerishOrNull($value, ?string $label = null): ?int
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
	 * @param class-string<TType> $type
	 * @return TType
	 */
	public static function instance($value, string $type, ?string $label = null): object
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
	 * @param class-string<TType> $type
	 * @return TType|null
	 */
	public static function instanceOrNull($value, string $type, ?string $label = null): ?object
	{
		if ($value === null || $value instanceof $type) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string<' . $type . '>|null', $label);
	}


	/**
	 * @template TType of object
	 * @param mixed $value
	 * @param class-string<TType> $type
	 * @return TType
	 */
	public static function instanceOf($value, string $type, ?string $label = null): object
	{
		if ($value instanceof $type) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string<' . $type . '>', $label);
	}


	/**
	 * @template TType of object
	 * @param mixed $value
	 * @param class-string<TType> $type
	 * @return TType|null
	 */
	public static function instanceOfOrNull($value, string $type, ?string $label = null): ?object
	{
		if ($value === null || $value instanceof $type) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string<' . $type . '>|null', $label);
	}


	/**
	 * @param mixed $value
	 * @return class-string
	 */
	public static function classString($value, ?string $label = null): string
	{
		if (Validator::classString($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string', $label);
	}


	/**
	 * @param mixed $value
	 * @return class-string|null
	 */
	public static function classStringOrNull($value, ?string $label = null): ?string
	{
		if ($value === null || Validator::classString($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string|null', $label);
	}


	/**
	 * @template TClassString
	 * @param mixed $value
	 * @param class-string<TClassString> $type
	 * @return class-string<TClassString>
	 */
	public static function classStringOf($value, string $type, ?string $label = null): string
	{
		if (Validator::classStringOf($value, $type)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string<' . $type . '>', $label);
	}


	/**
	 * @template TClassString
	 * @param mixed $value
	 * @param class-string<TClassString> $type
	 * @return class-string<TClassString>|null
	 */
	public static function classStringOfOrNull($value, string $type, ?string $label = null): ?string
	{
		if ($value === null || Validator::classStringOf($value, $type)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string<' . $type . '>|null', $label);
	}
}
