<?php
error_reporting(E_WARNING);
include("moduls/m_thuc_don.php");
include("moduls/Pager.php");
class C_thuc_don 
{
	
	public function hien_thi_thuc_don()
	{
		//modul
		$m_thuc_don=new M_thuc_don();
		$thuc_dons=$m_thuc_don->danh_sach_thuc_don();
		//phan trang
		$trang= new Pager();
		
		$limit=9;
		$count=count($thuc_dons);
		$vt=$trang->FindStart($limit);
		$pages=$trang->Findpage($count,$limit);
		$curpage=$_GET["page"];
		$list=$trang->PageList($curpage,$pages);
		$thuc_dons=$m_thuc_don->doc_thuc_don_phan_trang($vt,$limit);
		$page=$curpage;
		
		//end phan trang
		
		if(isset($_GET["ma_thuc_don"]))
		{
			$ma_thuc_don=$_GET["ma_thuc_don"];
		}
		else
		{
			$ma_thuc_don=$thuc_dons[0]->ma_thuc_don;
		}
		// in ra thu echo $ma_thuc_don;
		$thuc_don=$m_thuc_don->danh_sach_thuc_don_theo_ma($ma_thuc_don);
		$ct=$m_thuc_don->doc_thuc_don_mon_an($ma_thuc_don);
		
		
		//views
		include("smarty/libs/smarty_nhahang.php");
		$smarty=new smarty_nha_hang();
		//end cau hinh
		//lap trinh
		$smarty->assign("tieude","thuc don");
		$smarty->assign("thuc_dons",$thuc_dons);
		$smarty->assign("thuc_don",$thuc_don);
		$smarty->assign("ct",$ct);
		$smarty->assign("list",$list);
		$smarty->assign("page",$page);
		$smarty->assign("view","views/thucdon/v_thuc_don.tpl");
		//hien thi layout,chi hin thi 1 ma thoi
		$smarty->display("thuc_don/layout.tpl");
	} 
}

?>