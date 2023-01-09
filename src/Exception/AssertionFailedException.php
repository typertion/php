<?php declare(strict_types = 1);

namespace Typertion\Php\Exception;

use LogicException;

final class AssertionFailedException extends LogicException
{

	/**
	 * @param mixed $value
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function create($value, string $expected, $label = null): self
	{
		$label ??= 'variable';
		$label = is_callable($label) ? $label() : $label;

		return new self(
			sprintf('The %s expected to be %s, %s given.', $label, $expected, self::getType($value))
		);
	}

	/**
	 * @param mixed $value
	 */
	private static function getType($value): string
	{
		$type = self::getDebugType($value);

		if (\is_bool($value)) {
			return sprintf('%s(%s)', $type, $value ? 'true' : 'false');
		}

		if (\is_float($value) || \is_int($value)) {
			return sprintf('%s(%s)', $type, $value);
		}

		if (\is_string($value)) {
			return sprintf('%s(%s)', $type, strlen($value));
		}

		if (\is_array($value)) {
			return sprintf('%s(%s)', $type, count($value));
		}

		return $type;
	}

	/**
	 * @param mixed $value
	 */
	private static function getDebugType($value): string
	{
		if (function_exists('get_debug_type')) {
			return get_debug_type($value);
		}

		switch (true) {
			case null === $value: return 'null';
			case \is_bool($value): return 'bool';
			case \is_string($value): return 'string';
			case \is_array($value): return 'array';
			case \is_int($value): return 'int';
			case \is_float($value): return 'float';
			case \is_object($value): break;
			default:
				if (!\is_resource($value) || !($type = @get_resource_type($value))) {
					return 'unknown';
				}

				if ('Unknown' === $type) {
					$type = 'closed';
				}

				return "resource ($type)";
		}

		$class = \get_class($value);

		if (\strpos($class, '@') === false) {
			return $class;
		}

		$name = get_parent_class($class);
		if (!$name) {
			$name = ($implements = class_implements($class)) ? key($implements) : 'class';
		}

		return $name . '@anonymous';
	}

}
