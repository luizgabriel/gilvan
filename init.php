<?php

/**
 * Calls the Autoload other Classes
 */

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

$loader = require __DIR__.'/vendor/autoload.php';

if ('cli' !== php_sapi_name()) {
    ini_set('display_errors', 0);
    ExceptionHandler::register();
} elseif (!ini_get('log_errors') || ini_get('error_log')) {
    ini_set('display_errors', 1);
}

ErrorHandler::register($errorReportingLevel);
 
$request = Request::createFromGlobals();
$response = new Response();