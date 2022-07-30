<?php declare(strict_types = 1);

namespace Typertion\Php\Exception;

use LogicException;

final class AssertionFailedException extends LogicException
{

	public static function create(mixed $value, string $expected, ?string $label): self
	{
		return new self(
			sprintf('The %s expected to be %s, %s given.', $label ?? 'variable', $expected, get_debug_type($value))
		);
	}

}
