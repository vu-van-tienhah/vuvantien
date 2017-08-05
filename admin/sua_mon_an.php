<?php

include("smarty/libs/smarty_admin.php");
$smarty=new smarty_admin();
//end cau hinh
//lap trinh


$smarty->assign("tieude","loai mon an");
$smarty->assign("view","views/mon_an/v_admin_sua_mon_an.tpl");
//hien thi layout,chi hin thi 1 ma thoi
$smarty->display("layout.tpl");
?>