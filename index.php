<?php
include("smarty/libs/smarty_nhahang.php");
$smarty=new smarty_nha_hang();
//lap trinh
$title="he thong bai tap modul 3";
$noidung="day la phan noi dung";
$smarty->assign("tieude",$title);
$smarty->assign("noidung",$noidung);
//hien thi layout,chi hin thi 1 ma thoi
$smarty->display("layout.tpl");
?>