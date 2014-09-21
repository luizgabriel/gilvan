<?php

/**
 * GILVAN FRAMEWORK
 * Here where everething starts
 */

use Gilvan\App;

require_once __DIR__.'/init.php';

// GLOBAL CONSTANTS
const DS = DIRECTORY_SEPARATOR;
const ROOT = __DIR__;

// Starts the Aplication
$app = new App;
$app->run();