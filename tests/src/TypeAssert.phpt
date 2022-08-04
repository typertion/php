<?php declare(strict_types = 1);

use Typertion\Generator\Manifest\JsonManifest;
use Typertion\Php\TypeAssert;

require __DIR__ . '/../bootstrap.php';
require __DIR__ . '/../functions.php';

$manifest = JsonManifest::load(__DIR__ . '/../../generator/manifest.json');

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
		success($name, $row['type'], TypeAssert::$method(...), $row['value']);
	}

	foreach ($case['fail'] as $row) {
		fail($name, $row['type'], TypeAssert::$method(...), $row['value']);
	}
}
