<?php
include("smarty/libs/smarty_admin.php");
$smarty=new smarty_admin();
//end cau hinh
//lap trinh
$smarty->assign("tieude","cap nhap mon an");
$smarty->assign("view","views/mon_an/v_admin_them_mon_an.tpl");
$smarty->display("layout.tpl");

?>