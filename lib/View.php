<?php

/**
 * View
 * Renders a template
 */
namespace Gilvan;

class View
{

	public static function make($template_path, $vars = array())
	{
		return self::render(self::findTemplate($template_path));
	}

	protected static function findTemplate($template_path)
	{
		$template_path = str_replace('.', DS, $template_path);
		return $template_path . ".php";
	}

	protected function render($template_file, $args = array())
	{
		$template_file = ROOT.DS."app".DS."views".DS.$template_file;

		if(File::exists($template_file)){

			if(!is_null($args))
				extract($args);
			
		    ob_start();
		    require $template_file;
		    $html = ob_get_clean();

		    return $html;

		} else
			throw new \Exception("No view found at \"$template_file\"", 1);
	}
}