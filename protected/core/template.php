<?php
class Template
{
	private $_developer;//Template developer info
	private $_template;//Template info
	private $_dependencies;//Template dependencies
	function __construct($config)
	{
		//Set developer and template information
		$this->_developer=$config["developer"];
		$this->_theme=$config["template"];
		//Set template dependencies
		$this->_dependencies=$config["template"]["dependencies"];
	}
	public function getDependencies()//Returns an array containing the template's css and js dependencies
	{
		return $this->_dependencies;
	}
	public function getDeveloperInfo()//Returns an array containing the developer's information
	{
		return $this->_developer;
	}
	public function getTemplateInfo()//Returns and array containing the template's information
	{
		return $this->_template;
	}
	public function insertCss()//Returns the css insertion html code
	{
		//DO NOT EDIT NEXT LINE
		$html='<link rel="stylesheet" type="text/css" href="'.WEBSITE_ROOT.'/public/css/bootstrap.min.css"/>';
		if(!isset($this->_dependencies["css"]))return $html;//Return if no css dependencies
		foreach($this->_dependencies["css"] as $css)
		{
			//Include every css dependency
			$html.='<link rel="stylesheet" type="text/css" href="'.WEBSITE_ROOT.'/public/templates/'.urlencode($this->_template["name"]).'/css/'.$css.'"/>';
		}
		return $html;
	}
	public function insertJs()//Returns the js insertion html code
	{
		//DO NOT EDIT NEXT 2 LINES
		$html='<script type="text/javascript" src="'.WEBSITE_ROOT.'/public/js/bootstrap.min.js"></script>';
		$html='<script type="text/javascript" src="'.WEBSITE_ROOT.'/public/js/jquery-2.1.1.min.js"></script>';
		if(!isset($this->_dependencies["js"]))return $html;//Return if no javascript dependencies
		foreach($this->_dependencies["js"] as $js)
		{
			//Include every javascript dependency
			$html.='<script type="text/javascript" src="'.WEBSITE_ROOT.'/public/templates/'.urlencode($this->_template["name"]).'/js/'.$js.'"></script>';
		}
		return $html;
	}
}
?>