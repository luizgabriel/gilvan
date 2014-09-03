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
use Symfony\Component\HttpFoundation\Response;
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

		return $parameters;
	}

	private static function requestTree()
	{
		global $request;
		return array_filter(explode('/', $request->getPathInfo()));
	}

	public static function response($parameters)
	{
		$controller = $parameters['controller'];

		$request_tree = self::requestTree();

		if(is_callable($controller))
			$view = call_user_func($controller);
		else {
			if(count($request_tree) > 1)
				$view = (new $controller)->$request_tree[2]();
			else
				$view = (new $controller)->index();
		}

		return new Response($view);
	}

	public static function toRouteName($var)
	{
		if($var == '/')
			$var = '_root';
		return rtrim(ltrim($var, '/'), '/');
	}
}