<?php
error_reporting(E_WARNING);
require_once("moduls/m_mon_an.php");
include("moduls/Pager.php");
class C_mon_an
{
	public function hien_thi_mon_an()
	{
	//moduls
	$m_mon_an=new M_mon_an();
	$mon_ans=$m_mon_an->doc_mon_an();
	//phan trang
	$phan_trang=new Pager();
	$limit=9;
	$count=count($mon_ans);
	$vt=$phan_trang->FindStart($limit);
	$pages=$phan_trang->Findpage($count,$limit);
	$curpage=$_GET["page"];
	$list=$phan_trang->PageList($curpage,$pages);
	$mon_ans=$m_mon_an->doc_mon_an_phan_trang($vt,$limit);
	//end phan trang	
	//views
	include("smarty/libs/smarty_nhahang.php");
	$smarty=new smarty_nha_hang();
	//end cau hinh
	//lap trinh
	$smarty->assign("tieude","mon an");
	$smarty->assign("mon_ans",$mon_ans);
	$smarty->assign("list",$list);
	$smarty->assign("tieu_de_mon","danh sach mon an");
	$smarty->assign("view","views/monan/v_mon_an.tpl");
	//hien thi layout,chi hin thi 1 ma thoi
	$smarty->display("mon_an/layout.tpl");
	}
	
	public function hien_thi_mon_an_trong_ngay()
	{
	//moduls
	$m_mon_an=new M_mon_an();
	$mon_ans=$m_mon_an->doc_mon_an_trong_ngay();
	//phan trang
	$phan_trang=new Pager();
	$limit=9;
	$count=count($mon_ans);
	$vt=$phan_trang->FindStart($limit);
	$pages=$phan_trang->Findpage($count,$limit);
	$curpage=$_GET["page"];
	$list=$phan_trang->PageList($curpage,$pages);
	$mon_ans=$m_mon_an->doc_mon_an_trong_ngay_co_phan_trang($vt,$limit);
	//end phan trang	
	//views
	include("smarty/libs/smarty_nhahang.php");
	$smarty=new smarty_nha_hang();
	//end cau hinh
	//lap trinh
	$smarty->assign("mon_ans",$mon_ans);
	$smarty->assign("list",$list);
	$smarty->assign("tieude","mon an trong ngay");
	$smarty->assign("tieu_de_mon"," Mon an trong ngay");
	$smarty->assign("view","views/monan/v_mon_an_trong_ngay.tpl");
	//hien thi layout,chi hin thi 1 ma thoi
	$smarty->display("mon_an/layout.tpl");
	}
	public function chi_tiet_mon_an()
	{
		//moduls
		$ma_mon=$_GET["ma_mon"];
		require_once("moduls/m_mon_an.php");
		$m_mon_an=new M_mon_an();
		$mon_an=$m_mon_an->doc_mon_an_theo_ma_mon($ma_mon);
		$ma_loai=$mon_an->ma_loai;
		$mon_an_cung_loai=$m_mon_an->doc_mon_an_cung_loai($ma_loai,$ma_mon);
		//phan trang mon an cung loai
		
		$phan_trang=new Pager();
		$limit=10;
		$count=count($mon_an_cung_loai);
		$vt=$phan_trang->FindStart($limit);
		$pages=$phan_trang->Findpage($count,$limit);
		$curpage=$_GET["page"];
		$list=$phan_trang->PageList($curpage,$pages);
		$mon_an_cung_loai=$m_mon_an->doc_mon_an_cung_loai_phan_trang($ma_loai,$ma_mon,$vt,$limit);
		//end phan trang*/	
		
		//views
		include("smarty/libs/smarty_nhahang.php");
		$smarty=new smarty_nha_hang();
		//end cau hinh 
		//lap trinh $mon_an_cung_loai_phan
		$smarty->assign("mon_an",$mon_an);
		$smarty->assign("mon_an_cung_loai",$mon_an_cung_loai);
		
		$smarty->assign("tieude","chi tiet mon an");
		$smarty->assign("monancungloai","Mon an cung loai");
		$smarty->assign("chi_tiet_mon","chi_tiet mon an");
		$smarty->assign("list",$list);
		$smarty->assign("view","views/monan/v_chi_tiet_mon_an.tpl");
		//hien thi layout,chi hin thi 1 ma thoi
		$smarty->display("mon_an/layout.tpl");
	}
	//mon an theo mua
	public function hien_thi_mon_an_theo_mua()
	{
		//moduls
		
		
		//views
		include("smarty/libs/smarty_nhahang.php");
		$smarty=new smarty_nha_hang();
		//end cau hinh
		//lap trinh
		$smarty->assign("tieude","mon an theo mua");
		$smarty->assign("view","views/monan/v_mon_an_theo_mua.tpl");
		//hien thi layout,chi hin thi 1 ma thoi
		$smarty->display("mon_an/layout.tpl");
	}
	
}

?>