<?php

/**
 * ViewAdapter
 * Renders and Adapts the view
 **/
namespace Gilvan;
 
class ViewAdapter 
{

	public $regions          = [];
	protected $template_file = NULL;
	//Each template can only extends only 1 other template
	private $extension       = NULL; 
	private $cur_region_render;

	function __construct($template_file)
	{
		$this->template_file = $template_file;
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
		$this->extension = View::translatePath($template_path);
	}

	public function incl($template_path) //Include
	{
		return print $this->renderFileContent(View::translatePath($template_path));
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