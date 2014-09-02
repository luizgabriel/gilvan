<?php

/**
 * Calls the Autoload other Classes
 */

$loader = require __DIR__.'/vendor/autoload.php';
 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

ErrorHandler::register();
ExceptionHandler::register();
 
$request = Request::createFromGlobals();
$response = new Response();