<?php

function dd($var)
{
	var_dump($var);
	exit;
}

function e( $var )
{
	echo htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
}

function asset( $path )
{
	echo server() . '/public/' . $path;
}

function server()
{
	$path = ($_SERVER['SERVER_PORT'])? $_SERVER['SERVER_NAME'] .":" . $_SERVER['SERVER_PORT'] : $_SERVER['SERVER_NAME'];
	$path = 'http'.(empty($_SERVER['HTTPS'])?'':'s'). "://" . $path;
	return $path;
}