<?php
include("smarty/libs/smarty_admin.php");
$smarty=new smarty_admin();
$title="giao dien admin";
$smarty->assign("tieude",$title);

$smarty->display("layout.tpl");
?>