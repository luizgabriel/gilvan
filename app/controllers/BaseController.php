<?php

/**
 * Base Controller
 */

use Gilvan\Controller;
use Gilvan\View\View;

class BaseController extends Controller 
{
	public function index() {
		return View::make('index');
	}
}