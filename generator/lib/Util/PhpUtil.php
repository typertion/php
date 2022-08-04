<?php declare(strict_types = 1);

namespace Generator\Util;

final class PhpUtil
{

	public static function isPhp74Type(?string $type): bool
	{
		if (!$type) {
			return true;
		}

		if ($type === 'mixed') {
			return false;
		}

		return !str_contains($type, '|');
	}

}
