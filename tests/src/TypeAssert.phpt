<?php declare(strict_types = 1);

use Nette\Utils\FileSystem;
use Nette\Utils\Json;
use Typertion\Php\TypeAssert;

require __DIR__ . '/../bootstrap.php';
require __DIR__ . '/../functions.php';

$manifest = Json::decode(FileSystem::read(__DIR__ . '/../../generator/manifest.json'), Json::FORCE_ARRAY);

foreach ($manifest as $item) {
	$name = $item['name'];
	$method = $item['method'];
	$types = $item['types'];

	foreach (['object', 'iterable'] as $type) {
		if (in_array($type, $types, true)) {
			continue 2;
		}
	}

	$case = createCaseByTypes($types);

	foreach ($case['success'] as $row) {
		success($name, $row['type'], [TypeAssert::class, $method], $row['value']);
	}

	foreach ($case['fail'] as $row) {
		fail($name, $row['type'], [TypeAssert::class, $method], $row['value']);
	}
}
