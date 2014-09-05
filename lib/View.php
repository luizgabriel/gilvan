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
	private $extension = NULL;
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
		return ROOT.DS."app".DS."views".DS. $template_path . ".php";
	}

	public function render($args = array())
	{
		if(File::exists($this->template_file)){

			$args['_view'] = $this;
			$html = $this->renderFileContent($this->template_file, $args);
			$html = $this->renderExtensions($html, $args);

		    return $html;

		} else
			throw new \Exception("No view found at \"$template_file\"", 1);
	}

	private function renderFileContent($file, $args = array())
	{
		if(!is_null($args))
			extract($args);

	    ob_start();
	    require $file;
	    $html = ob_get_clean();

	    return $html;
	}

	private function renderExtensions($html, $args)
	{
		$html = $this->renderFileContent($this->extension, $args) . $html;
		return $html;
	}

	public function region($name)
	{
		return print (isset($this->regions[$name]))? $this->regions[$name] : NULL;
	}

	public function extend($template_path)
	{
		$this->extension = self::translatePath($template_path);
	}

	public function incl($template_path) //Include
	{
		return print $this->renderFileContent(self::translatePath($template_path));
	}

	public function regionStart($region)
	{
		$this->cur_region_render = $region;
		ob_start();
	}

	public function regionEnd()
	{
		$html = ob_get_clean();
		if(!in_array($this->cur_region_render, array_keys($this->regions)))
			$this->regions[$this->cur_region_render] = $html;
		else
			throw new Exception("Duplicated Region", 1);
	}
}