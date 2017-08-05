<?php
@session_start();
include("controllers/c_gio_hang.php");
$c_gio_hang=new c_gio_hang();
$key=$_POST['id'];
$soluong=((int)$_POST["soluong"]);
$dongia=((double)$_POST["dongia"]);
if($soluong>=0&&$dongia>=0)
$c_gio_hang->the
?>