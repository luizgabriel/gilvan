<?php

/**
 * View
 * Renders a template
 */

class View
{

	public function __callStatic($method, $params)
	{
		if($method == 'make') {

			switch (count($params)) {
				default:
				case 1:
					self::renderTemplate($params[0])
					break;

				case 1:
					self::renderTemplateWithVars($params[0], $params[1]);
					break;
			
			}

		}
	}

	protected static function renderTemplate($template_path)
	{

	}

	protected static function renderTemplateWithVars($template_path, $vars)
	{
		
	}

	protected function translate($template_file, $vars)
	{

	}
}