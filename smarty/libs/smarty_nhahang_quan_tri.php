<?php
include("Smarty.class.php");
class smarty_nha_hang_quan_tri extends Smarty
{
	function smarty_nha_hang()
	{
		parent::__construct();
	//cau hinh
	$this->setCacheDir("smarty/cache/");
	$this->setConfigDir("smarty/configs/");
	$this->setTemplateDir("smarty/templates/admin");
	$this->setCompileDir("smarty/templates_c/");

	}
}

?>