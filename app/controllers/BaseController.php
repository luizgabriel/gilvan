<?php

/**
 * Base Controller
 */

use Gilvan\Controller;
use Gilvan\View;

class BaseController extends Controller 
{
	public function index() {
		return 'You\'re on BaseController';
	}

	public function test() {
		$msg = 'Teste!';
		return View::make('test.view', compact('msg'));
	}
}