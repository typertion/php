<?php declare(strict_types = 1);

namespace Typertion\Php\Exception;

use Exception;
use Nette\Utils\Helpers;

final class OutOfBoundsException extends Exception
{

	/**
	 * @param string|int $index
	 * @param mixed[] $array
	 */
	public static function create($index, array $array): self
	{
		return new self(sprintf('Undefined index "%s"', $index) . self::didYouMean($array, $index));
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
