<?php
require_once("database.php");
class M_khach_hang extends database
{
	//nguoi dung
	public function doc_ds_khach_hang($vt=-1,$limit=-1)
	{
	$sql="select * from khach_hang";
	if($vt>0&&$limit>0)
	{
		$sql.="limit $vt,$limit";		
	}
	$this->SetQuery($sql);
	return $this->LoadAllrows();
	}
	
	//quan tri
	//them khach hang
	//`ma_khach_hang`, `ten_khach_hang`, `phai`, `email`, `dia_chi`, `dien_thoai`, `ghi_chu`
	public function them_khach_hang($ten_khach_hang,$phai,$dia_chi,$dien_thoai,$ghi_chu)
	{
	$sql="INSERT INTO khach_hang VALUES(?,?,?,?,?,?)";
	$this->SetQuery($sql);
	$param=array("NULL",$ten_khach_hang,$phai,$dia_chi,$dien_thoai,$ghi_chu);
	return $this->execute($param);	
	}
	//xoa
	public function xoa_khach_hang($ma_khach_hang)
	{
		$sql="DELETE from khach_hang where ma_khach_hang=?";
		$this->SetQuery($sql);
		$param=array($ma_khach_hang);
		return $this->execute($param);
	}
	//cap nhap
	public function sua_khach_hang($ma_khach_hang,$ten_khach_hang,$phai,$dia_chi,$dien_thoai,$ghi_chu)
	{
		$sql="UPDATE khach_hang SET(ten_khach_hang=?,phai=?,dia_chi=?,dien_thoai=?,ghi_chu=?) where ma_khach_hang=?";
		$this->SetQuery($sql);
		$param=array($ten_khach_hang,$phai,$dia_chi,$dien_thoai,$ghi_chu);
		return $this->execute($param);
	}
}


?>

