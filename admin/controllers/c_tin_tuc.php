<?php
session_start();
error_reporting(E_WARNING);
class C_tin_tuc
{
	public function hien_thi_tin_tuc()
	{
		$msg=isset($_SESSION["msg"])?$_SESSION["msg"]:"";
		if(isset($_SESSION["msg"])) unset($_SESSION["msg"]);
		
		//moduls
	require_once("../moduls/m_tin_tuc.php");
	$m_tin_tuc=new M_tin_tuc();
	$tin_tucs=$m_tin_tuc->doc_tin_tuc();
		//phan trang
	include("../moduls/Pager.php");
	$p=new Pager();
	$limit=5;
	$count=count($tin_tucs);
	$vt=$p->FindStart($limit);
	$pages=$p->Findpage($count,$limit);
	$curpage=$_GET["page"];
	$list=$p->PageList($curpage,$pages);
	$tin_tucs=$m_tin_tuc->doc_tin_tuc_phan_trang($vt,$limit);
		
		//views
	include("smarty/libs/smarty_admin.php");
	$smarty=new smarty_admin();
	//end cau hinh
	//lap trinh
	$smarty->assign("list",$list);
	$smarty->assign("msg",$msg);
	$smarty->assign("tin_tucs",$tin_tucs);
	$smarty->assign("tieude","danh sach tin tuc");
	$smarty->assign("title","danh sach tin tuc");
	$smarty->assign("view","views/tin_tuc/v_tin_tuc.tpl");
	$smarty->display("layout.tpl");
	}
	//them tin_Tuc
	public function them_tin_tuc()
	{
		//moduls
		if(isset($_POST["capnhap"]))
		{
			include("../moduls/m_tin_tuc.php");
			$m_tin_tuc=new M_tin_tuc();
			$tieu_de=$_POST["tieu_de"];
			$tom_tat=$_POST["tom_tat"];
			$chi_tiet=$_POST["chi_tiet"];
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
			$tac_gia=$_POST["tac_gia"];
			$ngay_dang=$_POST["ngay_dang"];
			$ngay_gui=$_POST["ngay_gui"];
			$so_luot_xem=$_POST["trong_ngay"];
			$kq=$m_tin_tuc->them_tin_tuc($tieu_de,$tom_tat,$chi_tiet,$hinh,$tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem);
			if($kq)//cap nhap thanh cong
			{
				$_SESSION["msg"]="cap nhap thanh công !";
				//di chuyen hinh
				if($hinh!="")
				{
					move_uploaded_file($_FILES["hinh"]["tmp_name"],"../img/hinh_tin_tuc/$hinh");
				}
			}
			else
			{
				$_SESSION["msg"]="thêm tin tức thất bại !";
			}
			//tro ve danh sach tin tuc
			header("location:tin_tuc.php");
		}
		//views
		include("smarty/libs/smarty_admin.php");
		$smarty=new smarty_admin();
		//end cau hinh
		//lap trinh
		$smarty->assign("tieude","them tin tuc");
		$smarty->assign("title","danh sach them tin tuc");
		$smarty->assign("view","views/tin_tuc/v_them_tin_tuc.tpl");
		$smarty->display("layout.tpl");
	}
	//sua tin tuc
	public function sua_tin_tuc()
	{
		//moduls
		include("../moduls/m_tin_tuc.php");
		$m_tin_tuc=new M_tin_tuc();
		$ma_tin_tuc=$_GET["ma_tin_tuc"];
		//echo $ma_tin_tuc;
		$tin_tucs=$m_tin_tuc->doc_tin_tuc_theo_ma_tin_tuc($ma_tin_tuc);
		if(isset($_POST["capnhap"]))
		{
			$tieu_de=$_POST["tieu_de"];
			$tom_tat=$_POST["tom_tat"];
			$chi_tiet=$_POST["chi_tiet"];
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:$tin_tucs->hinh;
			$tac_gia=$_POST["tac_gia"];
			$ngay_dang=$_POST["ngay_dang"];
			$ngay_gui=$_POST["ngay_gui"];
			$so_luot_xem=$_POST["so_luot_xem"];
			$kq=$m_tin_tuc->sua_tin_tuc($ma_tin_tuc,$tieu_de,$tom_tat,$chi_tiet,$hinh,$tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem);
			
			if($kq)//cap nhap thanh cong
			{
				$_SESSION["msg"]="sủa tin tức thành công !";
				//di chuyen hinh
				if($_FILES["hinh"]["error"]==0)
				{
					move_uploaded_file($_FILES["hinh"]["tmp_name"],"../img/hinh_tin_tuc/$hinh");
				}	
				
			}
			else
			{
				$_SESSION["msg"]="sửa tin tức không thành công !";
			}
			//di chuyển vê danh sách tin tức
			header("location:tin_tuc.php");
		}
		//views
		include("smarty/libs/smarty_admin.php");
		$smarty=new smarty_admin();
		//end cau hinh
		//lap trinh
		$smarty->assign("tin_tucs",$tin_tucs);
		$smarty->assign("tieude","sua tin tuc");
		$smarty->assign("title","danh sach tin tuc sua");
		$smarty->assign("view","views/tin_tuc/v_sua_tin_tuc.tpl");
		$smarty->display("layout.tpl");
		
	}
	//xoa
	public function xoa_tin_tuc()
	{
		//moduls
		$ma_tin_tuc=$_GET["ma_tin_tuc"];
		include("../moduls/m_tin_tuc.php");
		$m_tin_tuc=new M_tin_tuc();
		$xoa_tin_tuc=$m_tin_tuc->xoa_tin_tuc($ma_tin_tuc);
		if($xoa_tin_tuc)//xoa thanh cong
		{
			$_SESSION["msg"]="xóa thành công !";
		}
		else
		{
			$_SESSION["msg"]="xoa that bai !";
		}
		//ve ds tin tuc
		header("location:tin_tuc.php");
	}
}


?>