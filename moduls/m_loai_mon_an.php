<?php
require_once("database.php");

class M_loai_mon_an extends database
{
	//nguoi dung font-end
	public function doc_loai_mon_an()
	{
		$sql="select * from loai_mon_an";
		
		$this->SetQuery($sql);
		return $this->LoadAllrows();
	}
	public function doc_loai_mon_an_phan_trang($vt,$limit)
	{
		$sql="select * from loai_mon_an limit $vt,$limit";
		$this->SetQuery($sql);
		return $this->LoadAllrows();
	}
	
	public function doc_loai_mon_an_ma_loai($ma_loai)
	{
		$sql="select * from loai_mon_an where ma_loai=?";
		$this->SetQuery($sql);
		return $this->LoadRow(array($ma_loai));
	}
	//quan tri back end
	//them 
	//`ma_loai`, `ten_loai`, `mo_ta`, `hinh`
	public function them_loai_mon_an($ten_loai,$mo_ta,$hinh)
	{
		$sql="INSERT INTO loai_mon_an VALUES(?,?,?,?)";
		$this->SetQuery($sql);
		$param=array("NULL",$ten_loai,$mo_ta,$hinh);
		return $this->execute($param);
	}
	//sua 
	public function sua_loai_mon_an($ma_loai,$ten_loai,$mo_ta,$hinh)
	{
		$sql="UPDATE loai_mon_an SET ten_loai=?,mo_ta=?,hinh=?  WHERE ma_loai=?";
		$this->SetQuery($sql);
		$param=array($ten_loai,$mo_ta,$hinh,$ma_loai);
		return $this->execute($param);	
	}
	//xoa
	public function xoa_loai_mon_an($ma_loai)
	{
		$sql="delete from loai_mon_an where ma_loai=?";
		$this->SetQuery($sql);
		$param=array($ma_loai);
		return $this->execute($param);
	}
}


?>