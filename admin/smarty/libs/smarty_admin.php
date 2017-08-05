<?php
include("Smarty.class.php");
class smarty_admin extends Smarty
{
	function __construct()
	{
		
		parent::__construct();
		$this->setCacheDir("smarty/cache/");
		$this->setConfigDir("smarty/configs/");
		$this->setTemplateDir("smarty/templates/");
		$this->setCompileDir("smarty/templates_c/");
	}
}
?>