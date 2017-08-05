<?php
include("Smarty.class.php");
class smarty_nha_hang extends Smarty
{
	function smarty_nha_hang()
	{
		parent::__construct();
	//cau hinh
	$this->setCacheDir("smarty/cache/");
	$this->setConfigDir("smarty/configs/");
	$this->setTemplateDir("smarty/templates/");
	$this->setCompileDir("smarty/templates_c/");

	}
}

?>