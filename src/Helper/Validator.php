<?php declare(strict_types = 1);

namespace Typertion\Php\Helper;

final class Validator
{

	public static function classStringOf(mixed $value, string $type): bool
	{
		return is_string($value) && is_a($value, $type, true);
	}

	public static function classString(mixed $value): bool
	{
		return is_string($value) && class_exists($value);
	}

	public static function integerish(mixed &$value): bool
	{
		if (is_numeric($value)) {
			$value = (int) $value;

			return true;
		}

		return false;
	}

	public static function floatish(mixed &$value): bool
	{
		if (is_numeric($value)) {
			$value = (float) $value;

			return true;
		}

		return false;
	}

}
