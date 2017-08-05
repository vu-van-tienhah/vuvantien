<?php
require_once("moduls/m_tin_tuc.php");
class C_tin_tuc
{
	public function hien_thi_tin_tuc()
	{
		//muduls
		$m_tin_tuc=new M_tin_tuc();
		$tin_tucs=$m_tin_tuc->doc_tin_tuc();
		if(isset($_GET["ma_tin_tuc"]))
		{
			$ma_tin_tuc=$_GET["ma_tin_tuc"];
		}
		else
		{
			$ma_tin_tuc=$tin_tucs[0]->ma_tin_tuc;
		}
		$ct=$m_tin_tuc->doc_tin_tuc_theo_ma_tin_tuc($ma_tin_tuc);
		
		//views
	include("smarty/libs/smarty_nhahang.php");
	$smarty=new smarty_nha_hang();
	//end cau hinh
	//lap trinh
	$smarty->assign("tin_tucs",$tin_tucs);
	$smarty->assign("ct",$ct);
	$smarty->assign("tieude","tin tuc trong ngay");
	$smarty->assign("view","views/tintuc/v_tin_tuc.tpl");
	//hien thi layout,chi hin thi 1 ma thoi
	$smarty->display("layout.tpl");
	}
}


?>