<?php
session_start();
error_reporting(E_WARNING);
class C_loai_mon_an
{
	public function hien_thi_loai_mon_an()
	{
		//thong bao
		$msg=isset($_SESSION["msg"])?$_SESSION["msg"]:"";
		if(isset($_SESSION["msg"])) unset($_SESSION["msg"]);//end thong bao
		
		//moduls
	require_once("../moduls/Pager.php");
	require_once("../moduls/m_loai_mon_an.php");
	$m_loai_mon_an=new M_loai_mon_an();
	$loai_mons=$m_loai_mon_an->doc_loai_mon_an();	
		//phan trang
		$p=new Pager();
		$limit=5;
		$count=count($loai_mons);
		$vt=$p->FindStart($limit);
		$pages=$p->Findpage($count,$limit);
		$curpage=$_GET["page"];
		$list=$p->PageList($curpage,$pages);
		$loai_mons=$m_loai_mon_an->doc_loai_mon_an_phan_trang($vt,$limit);
		
		//views
	include("smarty/libs/smarty_admin.php");
	$smarty=new smarty_admin();
	//end cau hinh
	//lap trinh
	$smarty->assign("list",$list);
	$smarty->assign("msg",$msg);
	$smarty->assign("loai_mons",$loai_mons);
	$smarty->assign("tieude","loai mon an");
	$smarty->assign("view","views/loai_mon_an/v_admin_loai_mon_an.tpl");
	//hien thi layout,chi hin thi 1 ma thoi
	$smarty->display("layout.tpl");
	}
	//them loai mon
	public function them_loai_mon_an()
	{
		//moduls
		if(isset($_POST["capnhap"]))
		{
			
			require_once("../moduls/m_loai_mon_an.php");
			$ten_loai=$_POST["ten_loai"];
			$mo_ta=$_POST["mo_ta"];
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
			
			$m_loai_mon_an=new M_loai_mon_an();
			$kq=$m_loai_mon_an->them_loai_mon_an($ten_loai,$mo_ta,$hinh);
			if($kq)//cap nhap thanh cong
			{
				$_SESSION["msg"]="thêm loại món ăn thành công !";
				//di chuyen hinh
				if($hinh!="")
				{
					move_uploaded_file($_FILES["hinh"]["tmp_name"],"../img/hinh_loai_mon_an/$hinh");
				}
				
				
			}
			else
			{
				$_SESSION["msg"]="thêm loại món ăn bị lỗi !";
			}
			//chuyen ve danh sach loai mon an
			header("location:loai_mon_an.php");
		}
		//views
	include("smarty/libs/smarty_admin.php");
	$smarty=new smarty_admin();
	//end cau hinh
	//lap trinh
	$smarty->assign("tieude","loai mon an");
	$smarty->assign("view","views/loai_mon_an/v_admin_them_loai_mon.tpl");
	//hien thi layout,chi hin thi 1 ma thoi
	$smarty->display("layout.tpl");
	}
	//sua loai mon an
	public function sua_loai_mon_an()
	{
		//moduls
		require_once("../moduls/m_loai_mon_an.php");
		$m_loai_mon_an=new M_loai_mon_an();
		$ma_loai=$_GET["ma_loai"];
		//echo $ma_loai;
		$loai_mons=$m_loai_mon_an->doc_loai_mon_an_ma_loai($ma_loai);
		if(isset($_POST["capnhap"]))
		{
			$ten_loai=$_POST["ten_loai"];
			$mo_ta=$_POST["mo_ta"];
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:$loai_mons->hinh;
			$kq=$m_loai_mon_an->sua_loai_mon_an($ma_loai,$ten_loai,$mo_ta,$hinh);
			if($kq)//cap nhap thanh cong
			{
				//di chuyen hinh
				if($_FILES["hinh"]["error"]==0)
				{
					move_uploaded_file($_FILES["hinh"]["tmp_name"],"../img/hinh_loai_mon_an/$hinh");
				}
				
				$_SESSION["msg"]="sửa loại món ăn thành công !";
				
				
			}
			else
				{
					$_SESSION["msg"]="sửa loại món ăn bị lỗi !";
				}
			//chuyen ve danh sach loai mon an
			header("location:loai_mon_an.php");
		}
		//views
		include("smarty/libs/smarty_admin.php");
		$smarty=new smarty_admin();
		//end cau hinh
		//lap trinh
		$smarty->assign("tieude","loai mon an");
		$smarty->assign("loai_mons",$loai_mons);
		$smarty->assign("view","views/loai_mon_an/v_admin_sua_loai_mon_an.tpl");
		//hien thi layout,chi hin thi 1 ma thoi
		$smarty->display("layout.tpl");	
	}
	//xoa loai mon an
	public function xoa_loai_mon_an()
	{
		//moduls
		$ma_loai=$_GET["ma_loai"];
		require_once("../moduls/m_loai_mon_an.php");
		$m_loai_mon_an=new M_loai_mon_an();
		$xoa_loai_mon=$m_loai_mon_an->xoa_loai_mon_an($ma_loai);
		if($xoa_loai_mon)
		{
			$_SESSION["msg"]="xóa loại món ăn thành công !";
			
		}
		else
		{
			$_SESSION["msg"]="xóa loại món ăn thất bại !";
		}
		//chuyen trang ve danh sach loai mon an
		header("location:loai_mon_an.php");
	}
	
}
	


?>