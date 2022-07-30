<?php

declare(strict_types=1);

namespace Typertion\Php;

use Typertion\Php\Exception\AssertionFailedException;
use Typertion\Php\Helper\Validator;

class TypeAssert
{
	/**
	 * @return mixed[]
	 */
	public static function array(mixed $value, ?string $label = null): array
	{
		if (is_array($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'array', $label);
	}


	/**
	 * @return mixed[]|null
	 */
	public static function arrayOrNull(mixed $value, ?string $label = null): ?array
	{
		if (is_array($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'array|null', $label);
	}


	public static function object(mixed $value, ?string $label = null): object
	{
		if (is_object($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'object', $label);
	}


	public static function objectOrNull(mixed $value, ?string $label = null): ?object
	{
		if (is_object($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'object|null', $label);
	}


	/**
	 * @return mixed[]|object
	 */
	public static function arrayOrObject(mixed $value, ?string $label = null): array|object
	{
		if (is_array($value) || is_object($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'array|object', $label);
	}


	/**
	 * @return mixed[]|object|null
	 */
	public static function arrayOrObjectOrNull(mixed $value, ?string $label = null): array|object|null
	{
		if (is_array($value) || is_object($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'array|object|null', $label);
	}


	public static function string(mixed $value, ?string $label = null): string
	{
		if (is_string($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'string', $label);
	}


	public static function stringOrNull(mixed $value, ?string $label = null): ?string
	{
		if (is_string($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'string|null', $label);
	}


	public static function int(mixed $value, ?string $label = null): int
	{
		if (is_int($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int', $label);
	}


	public static function intOrNull(mixed $value, ?string $label = null): ?int
	{
		if (is_int($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|null', $label);
	}


	public static function float(mixed $value, ?string $label = null): float
	{
		if (is_float($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'float', $label);
	}


	public static function floatOrNull(mixed $value, ?string $label = null): ?float
	{
		if (is_float($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'float|null', $label);
	}


	public static function intOrFloat(mixed $value, ?string $label = null): int|float
	{
		if (is_int($value) || is_float($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|float', $label);
	}


	public static function intOrFloatOrNull(mixed $value, ?string $label = null): int|float|null
	{
		if (is_int($value) || is_float($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|float|null', $label);
	}


	public static function bool(mixed $value, ?string $label = null): bool
	{
		if (is_bool($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'bool', $label);
	}


	public static function boolOrNull(mixed $value, ?string $label = null): ?bool
	{
		if (is_bool($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'bool|null', $label);
	}


	public static function callable(mixed $value, ?string $label = null): callable
	{
		if (is_callable($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'callable', $label);
	}


	public static function callableOrNull(mixed $value, ?string $label = null): ?callable
	{
		if (is_callable($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'callable|null', $label);
	}


	/**
	 * @return iterable<mixed>
	 */
	public static function iterable(mixed $value, ?string $label = null): iterable
	{
		if (is_iterable($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'iterable', $label);
	}


	/**
	 * @return iterable<mixed>|null
	 */
	public static function iterableOrNull(mixed $value, ?string $label = null): ?iterable
	{
		if (is_iterable($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'iterable|null', $label);
	}


	public static function scalar(mixed $value, ?string $label = null): int|float|string|bool
	{
		if (is_scalar($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|float|string|bool', $label);
	}


	public static function scalarOrNull(mixed $value, ?string $label = null): int|float|string|bool|null
	{
		if (is_scalar($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|float|string|bool|null', $label);
	}


	public static function numeric(mixed $value, ?string $label = null): int|float|string
	{
		if (is_numeric($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|float|string', $label);
	}


	public static function numericOrNull(mixed $value, ?string $label = null): int|float|string|null
	{
		if (is_numeric($value) || $value === null) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|float|string|null', $label);
	}


	public static function floatish(mixed $value, ?string $label = null): float
	{
		if (Validator::floatish($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'float', $label);
	}


	public static function floatishOrNull(mixed $value, ?string $label = null): ?float
	{
		if ($value === null || Validator::floatish($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'float|null', $label);
	}


	public static function integerish(mixed $value, ?string $label = null): int
	{
		if (Validator::integerish($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int', $label);
	}


	public static function integerishOrNull(mixed $value, ?string $label = null): ?int
	{
		if ($value === null || Validator::integerish($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'int|null', $label);
	}


	/**
	 * @deprecated use instanceOf instead
	 * @template TType of object
	 * @param class-string<TType> $type
	 * @return TType
	 */
	public static function instance(mixed $value, string $type, ?string $label = null): object
	{
		if ($value instanceof $type) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string<' . $type . '>', $label);
	}


	/**
	 * @deprecated use instanceOf instead
	 * @template TType of object
	 * @param class-string<TType> $type
	 * @return TType|null
	 */
	public static function instanceOrNull(mixed $value, string $type, ?string $label = null): ?object
	{
		if ($value === null || $value instanceof $type) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string<' . $type . '>|null', $label);
	}


	/**
	 * @template TType of object
	 * @param class-string<TType> $type
	 * @return TType
	 */
	public static function instanceOf(mixed $value, string $type, ?string $label = null): object
	{
		if ($value instanceof $type) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string<' . $type . '>', $label);
	}


	/**
	 * @template TType of object
	 * @param class-string<TType> $type
	 * @return TType|null
	 */
	public static function instanceOfOrNull(mixed $value, string $type, ?string $label = null): ?object
	{
		if ($value === null || $value instanceof $type) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string<' . $type . '>|null', $label);
	}


	/**
	 * @return class-string
	 */
	public static function classString(mixed $value, ?string $label = null): string
	{
		if (Validator::classString($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string', $label);
	}


	/**
	 * @return class-string|null
	 */
	public static function classStringOrNull(mixed $value, ?string $label = null): ?string
	{
		if ($value === null || Validator::classString($value)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string|null', $label);
	}


	/**
	 * @template TClassString
	 * @param class-string<TClassString> $type
	 * @return class-string<TClassString>
	 */
	public static function classStringOf(mixed $value, string $type, ?string $label = null): string
	{
		if (Validator::classStringOf($value, $type)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string<' . $type . '>', $label);
	}


	/**
	 * @template TClassString
	 * @param class-string<TClassString> $type
	 * @return class-string<TClassString>|null
	 */
	public static function classStringOfOrNull(mixed $value, string $type, ?string $label = null): ?string
	{
		if ($value === null || Validator::classStringOf($value, $type)) {
			return $value;
		}

		throw AssertionFailedException::create($value, 'class-string<' . $type . '>|null', $label);
	}
}
