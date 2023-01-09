<?php declare(strict_types = 1);

namespace Typertion\Php\Helper;

final class Validator
{

	/**
	 * @param mixed $value
	 */
	public static function classStringOf($value, string $type): bool
	{
		return \is_string($value) && \is_a($value, $type, true);
	}

	/**
	 * @param mixed $value
	 */
	public static function classString($value): bool
	{
		return \is_string($value) && \class_exists($value);
	}

	/**
	 * @param mixed $value
	 */
	public static function integerish(&$value): bool
	{
		if (\is_numeric($value)) {
			$value = (int) $value;

			return true;
		}

		return false;
	}

	/**
	 * @param mixed $value
	 */
	public static function floatish(&$value): bool
	{
		if (\is_numeric($value)) {
			$value = (float) $value;

			return true;
		}

		return false;
	}

}
