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
	return $_SERVER['SERVER_NAME'] . '/public/' . $path;
}