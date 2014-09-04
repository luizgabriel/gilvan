<?php

/**
 * View
 * Renders a template
 */
namespace Gilvan;

class View
{
	public $regions = [];
	protected $template_file = NULL;
	private $cur_region_render;

	public function __construct($template_path)
	{
		$this->template_file = self::translatePath($template_path);
	}

	public static function make($template_path, $args = array())
	{
		$view = new self($template_path);
		return $view->render($args);
	}

	protected static function translatePath($template_path)
	{
		$template_path = str_replace('.', DS, $template_path);
		return $template_path . ".php";
	}

	public function render($args = array())
	{
		$this->template_file = ROOT.DS."app".DS."views".DS.$this->template_file;

		if(File::exists($this->template_file)){

			$args['_view'] = $this;

			if(!is_null($args))
				extract($args);
			
		    ob_start();
		    require $this->template_file;
		    $html = ob_get_clean();

		    return $html;

		} else
			throw new \Exception("No view found at \"$template_file\"", 1);
	}

	public function _region($name)
	{
		return print (isset($this->regions[$name]))? $this->regions[$name] : NULL;
	}

	public function _regionStart($region)
	{
		$this->cur_region_render = $region;
		ob_start();
	}

	public function _regionEnd()
	{
		$html = ob_get_clean();
		if(!in_array($this->cur_region_render, array_keys($this->regions)))
			$this->regions[$this->cur_region_render] = $html;
		else
			throw new Exception("Duplicate Regions", 1);
	}
}