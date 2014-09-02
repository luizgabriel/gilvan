<?php

/**
 * All Routes should be written here
 * ---------------------------------------------------
 *
 * Router::controller('/', function(){
 * 		return 'Hello World!';
 * });
 *
 */

use Gilvan\Router;

Router::controller('/', function(){
	return 'Hello World!';
});

Router::controller('/hello', 'BaseController');