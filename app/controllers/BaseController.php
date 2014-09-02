<?php

/**
 * Base Controller
 */

use Gilvan\Controller;

class BaseController extends Controller 
{
	public function index() {
		echo 'You\'re on BaseController';
	}

	public function test() {
		echo 'You\'re on BaseController::test()';
	}
}