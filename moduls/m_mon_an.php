<?php
require_once("database.php");
class M_mon_an extends database
{
	/*
	lay danh sach mon an
	lay danh sach mon an co phan trang
	lay mon an theo ma mon
	lay mon an cung loai
	lay mon an phuc vu trong ngay
	them mon an
	cap nhap mon an
	xoa mon an
	*/
	
	
	//nguoi dung
	function doc_mon_an()
	{
		$sql="select * from mon_an";
		$this->SetQuery($sql);
		return $this->LoadAllrows();
	}
	function doc_mon_an_phan_trang($vt,$limit)
	{
		$sql="select * from mon_an limit $vt,$limit";
		$this->SetQuery($sql);
		return $this->LoadAllrows();	
	}
	function doc_mon_an_trong_ngay_co_phan_trang($vt,$limit)
	{
		$sql="select * from mon_an where trong_ngay=1 limit $vt,$limit";
		$this->SetQuery($sql);
		return $this->LoadAllrows();
	}
	function doc_mon_an_theo_ma_mon($ma_mon)
	{
		$sql="select * from mon_an where ma_mon=?";
		$this->SetQuery($sql);
		$param=array($ma_mon);
		return $this->LoadRow($param);
	}
	function doc_mon_an_cung_loai($ma_loai,$ma_mon)
	{
		$sql="select * from mon_an where ma_loai=? && ma_mon!=?";
		$this->SetQuery($sql);
		return $this->LoadAllrows(array($ma_loai,$ma_mon));		
	}
	function doc_mon_an_cung_loai_phan_trang($ma_loai,$ma_mon,$vt,$limit)
	{
		$sql="select * from mon_an where ma_loai=? && ma_mon!=? limit $vt,$limit";
		$this->SetQuery($sql);
		return $this->LoadAllrows(array($ma_loai,$ma_mon));
		
	}
	function doc_mon_an_trong_ngay()
	{
		$sql="select * from mon_an where trong_ngay=1";
		$this->SetQuery($sql);
		return $this->LoadAllrows();
	}
	function tim_kiem($keywork)
	{
		//$patterns=array('/\s+/');
		//$replace=array('');
		//$keywork=preg_replace($patterns,$replace,$keywork);
		if($keywork!="")
		{
			$sql="select * from mon_an where ten_mon like '%$keywork%'";
		}
		else
		{
			$sql="select * from mon_an where ten_mon='' ";
		}
		$this->SetQuery($sql);
		return $this->LoadAllrows();
	}
	public function lay_mon_an_cho_gio_hang($chuoi)
	{
		$sql="select * from mon_an where ma_mon in($chuoi)";
		$this->SetQuery($sql);
		return $this->LoadAllrows();
	}
	//quan tri
	//them mon an
	public function them_mon_an($ma_loai,$ten_mon,$noi_dung_tom_tat,$noi_dung_chi_tiet,$don_gia,$don_gia_khuyen_mai,$khuyen_mai,$hinh,$ngay_cap_nhap,$dvt,$trong_ngay)
	{
		//`ma_mon`, `ma_loai`, `ten_mon`, `noi_dung_tom_tat`, `noi_dung_chi_tiet`, `don_gia`, `don_gia_khuyen_mai`, `khuyen_mai`, `hinh`, `ngay_cap_nhat`, `dvt`, `trong_ngay`
		$sql="INSERT INTO mon_an VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
		$this->SetQuery($sql);
		$param=array("NULL",$ma_loai,$ten_mon,$noi_dung_tom_tat,$noi_dung_chi_tiet,$don_gia,$don_gia_khuyen_mai,$khuyen_mai,$hinh,$ngay_cap_nhap,$dvt,$trong_ngay);
		$this->execute($param);
	}
	//sua mon an
	public function sua_mon_an($ma_mon,$ma_loai,$ten_mon,$noi_dung_tom_tat,$noi_dung_chi_tiet,$don_gia,$don_gia_khuyen_mai,$khuyen_mai,$hinh,$ngay_cap_nhap,$dvt,$trong_ngay)
	{
		$sql="UPDATE mon_an 								SET(ma_loai=?,ten_mon=?,noi_dung_tom_tat=?,noi_dung_chi_tiet=?,don_gia=?,don_gia_khuyen_mai=?,khuyen_mai=?,hinh=?,ngay_cap_nhap=?,dvt=?,trong_ngay=?) where ma_mon=?";
		$this->SetQuery($sql);
		$param=array($ma_loai,$ten_mon,$noi_dung_tom_tat,$noi_dung_chi_tiet,$don_gia,$don_gia_khuyen_mai,$khuyen_mai,$hinh,$ngay_cap_nhap,$dvt,$trong_ngay,$ma_mon);
		return $this->execute($param);
	}
	//xoa mon an
	public function xoa_mon_an($ma_mon)
	{
	$sql="DELETE from mon_an where ma_mon=?";
	$this->SetQuery($sql);
	$param=array($ma_mon);
	$this->execute($param);
	}
}


?>