<?php

/**
 * View
 * Renders a template
 */
namespace Gilvan;

class View
{
	protected $template_file = NULL;
	protected $template;

	public function __construct($template_path)
	{
		$this->template_file = self::translatePath($template_path);
		$this->template = new ViewAdapter($this->template_file, $this);
	}

	public static function make($template_path, $args = array())
	{
		$view = new self($template_path);
		return $view->template->render($args);
	}

	public static function translatePath($template_path)
	{
		$template_path = str_replace('.', DS, $template_path);
		return ROOT.DS."app".DS."views".DS. $template_path . ".php";
	}

}