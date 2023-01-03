<?php declare(strict_types = 1);

namespace Typertion\Php\Exception;

use Nette\Utils\Helpers;

final class OutOfBoundsException extends \OutOfBoundsException
{

	/**
	 * @param string|int $index
	 * @param mixed[] $array
	 * @param string|(callable(): string|null)|null $label
	 */
	public static function create($index, array $array, $label = null): self
	{
		$label = is_callable($label) ? $label() : $label;
		$label = $label ? sprintf(' for %s', $label) : '';

		$message = sprintf('Undefined index "%s"%s', $index, $label);

		return new self($message . self::didYouMean($array, $index));
	}

	/**
	 * @param mixed[] $array
	 * @param string|int $index
	 */
	private static function didYouMean(array $array, $index): string
	{
		if (is_int($index)) {
			return '.';
		}

		$possibilities = [];

		foreach ($array as $key => $value) {
			if (!is_int($key)) {
				$possibilities[] = $key;
			}
		}

		$suggestion = Helpers::getSuggestion($possibilities, $index);

		if (!$suggestion) {
			return '.';
		}

		return sprintf(', did you mean "%s"?', $suggestion);
	}

}
