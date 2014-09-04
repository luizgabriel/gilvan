<?php

/**
 * GILVAN FRAMEWORK
 * Here where everething starts
 */

use Gilvan\App;

require_once __DIR__.'/init.php';

const DS = DIRECTORY_SEPARATOR;
const ROOT = __DIR__;

$app = new App;
$app->run();