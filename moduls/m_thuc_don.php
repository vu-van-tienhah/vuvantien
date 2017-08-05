<?php
require_once("database.php");
class M_thuc_don extends database
{
	//nguoi dung
	public function danh_sach_thuc_don()
	{
		$sql="select * from thuc_don";	
		
		$this->SetQuery($sql);
		return $this->LoadAllrows();
	}
	public function doc_thuc_don_phan_trang($vt,$limit)
	{
		$sql="select * from thuc_don limit $vt,$limit";
		$this->SetQuery($sql);
		return $this->LoadAllrows();
	}
	public function danh_sach_thuc_don_theo_ma($ma_thuc)
	{
		$sql="select * from thuc_don where ma_thuc_don=?";
		$this->SetQuery($sql);
		return $this->LoadRow(array($ma_thuc));
	}
	public function doc_thuc_don_mon_an($ma_thuc_don)
	{
		$sql="SELECT ma_thuc_don,mon.ma_mon,ten_mon,don_gia,noi_dung_tom_tat,so_luong,hinh 
		from thuc_don_mon_an thuc_don inner join mon_an mon on thuc_don.ma_mon=mon.ma_mon and ma_thuc_don=?";
		$this->SetQuery($sql);
		return $this->LoadAllrows(array($ma_thuc_don));
	}
	public function lay_thuc_don_cho_gio_hang($chuoi)
	{
		$sql="select * from thuc_don where ma_thuc_don in($chuoi)";
		$this->SetQuery($sql);
		return $this->LoadAllrows();
	}
	//quan tri
	//`ma_thuc_don`, `ten_thuc_don`, `don_gia`, `don_gia_khuyen_mai`, `noi_dung`, `hinh_thuc_don`
	//them
	public function them_thuc_don($ten_thuc_don,$don_gia,$don_gia_khuyen_mai,$noi_dung,$hinh_thuc_don)
	{
		$sql="INSERT INTO thuc_don VALUES(?,?,?,?,?,?)";
		$this->SetQuery($sql);
		$param=array("NULL",$ten_thuc_don,$don_gia,$don_gia_khuyen_mai,$noi_dung,$hinh_thuc_don);
		return $this->execute($param);	
	}
	//sua
	public function sua_thuc_don($ma_thuc_don,$ten_thuc_don,$don_gia,$don_gia_khuyen_mai,$noi_dung,$hinh_thuc_don)
	{
		$sql="UPDATE thuc_don SET(ten_thuc_don=?,don_gia=?,khuyen_mai=?,noi_dung=?,hinh_thuc_don=?) where ma_thuc_don=?";
		$this->SetQuery($sql);
		$param=array($ten_thuc_don,$don_gia,$don_gia_khuyen_mai,$noi_dung,$hinh_thuc_don);
		return $this->execute($param);
	}
	//xoa
	public function xoa_thuc_don($ma_thuc_don)
	{
		$sql="DELETE from thuc_don where ma_thuc_don=?";
		$this->SetQuery($sql);
		$param=array($ma_thuc_don);
		return $this->execute($param);	
	}
}


?>