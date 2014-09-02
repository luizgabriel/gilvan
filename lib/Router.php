<?php

/**
 * Router
 * Calls the specific controller method based on routes given
 */

namespace Gilvan;

use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Request;
use Gilvan\Controller;

class Router
{
	protected static $instace = NULL;
	protected $routesCollection;

	public function __construct()
	{
		$this->routesCollection = new RouteCollection;
	}

	public static function instace()
	{
		if(is_null(self::$instace))
			return self::$instace = new self;
		else
			return self::$instace;
	}

	protected static function add($path, $options)
	{
		$route = new Route($path, $options);
		$path = self::toRouteName($path);

		self::instace()->routesCollection->add($path, $route);
	}

	public static function controller($path, $controller)
	{
		self::add($path, ['controller' => $controller]);
	}

	public static function match()
	{
		global $request;

		$context = new RequestContext($request);
		$matcher = new UrlMatcher(self::$instace->routesCollection, $context);
		if(count(self::requestTree()) > 1) {
			$parameters = $matcher->match("/".self::requestTree()[1]);
		}else
			$parameters = $matcher->match($request->getPathInfo());

		return self::callController($parameters);
	}

	private static function requestTree()
	{
		global $request;
		return array_filter(explode('/', $request->getPathInfo()));
	}

	public static function callController($parameters)
	{
		$controller = $parameters['controller'];

		$request_tree = self::requestTree();

		if(is_callable($controller))
			return print call_user_func($controller);
		else {
			if(count($request_tree) > 1)
				return (new $controller)->$request_tree[2]();
			else
				return (new $controller)->index();
		}
	}

	public static function toRouteName($var)
	{
		if($var == '/')
			$var = '_root';
		return rtrim(ltrim($var, '/'), '/');
	}
}