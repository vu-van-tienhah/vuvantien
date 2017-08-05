<?php

include("smarty/libs/smarty_nhahang.php");
$smarty=new smarty_nha_hang();
//end cau hinh
//lap trinh


$smarty->assign("tieude","tin tuc mon an");
$smarty->assign("view","views/timkiem/v_tim_kiem.tpl");
//hien thi layout,chi hin thi 1 ma thoi
$smarty->display("layout.tpl");
?>