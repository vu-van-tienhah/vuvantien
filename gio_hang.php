<?php

include("smarty/libs/smarty_nhahang.php");
$smarty=new smarty_nha_hang();
//end cau hinh
//lap trinh


$smarty->assign("tieude","mon an trong ngay");
$smarty->assign("view","views/giohang/v_gio_hang.tpl");
//hien thi layout,chi hin thi 1 ma thoi
$smarty->display("layout.tpl");
?>