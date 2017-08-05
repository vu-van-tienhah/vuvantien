<?php
require_once("database.php");
class M_tin_tuc extends database
{
	//quan tri font-end
	public function doc_tin_tuc()
	{
		$sql="select * from tin_tuc";
		$this->SetQuery($sql);
		return $this->LoadAllrows();
	}	
	public function doc_tin_tuc_phan_trang($vt,$limit)
	{
		$sql="select * from tin_tuc limit $vt,$limit";
		$this->SetQuery($sql);
		return $this->LoadAllrows();
	} 
	public function doc_tin_tuc_theo_ma_tin_tuc($ma_tin_tuc)
	{
		$sql="select * from tin_tuc where ma_tin_tuc=?";
		$this->SetQuery($sql);
		return $this->LoadRow(array($ma_tin_tuc));
	}
	//quan tri back end
	//them tin tuc
	//`ma_tin_tuc`, `tieu_de`, `tom_tat`, `chi_tiet`, `hinh`, `tac_gia`, `ngay_dang`, `ngay_gui`, `so_luot_xem`
	public function them_tin_tuc($tieu_de,$tom_tat,$chi_tiet,$hinh,$tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem)
	{
		$sql="INSERT INTO tin_tuc VALUES(?,?,?,?,?,?,?,?,?)";
		$this->SetQuery($sql);
		$param=array("NULL",$tieu_de,$tom_tat,$chi_tiet,$hinh,$tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem);
		return $this->execute($param);
	}
	//sua tin tuc
	public function sua_tin_tuc($ma_tin_tuc,$tieu_de,$tom_tat,$chi_tiet,$hinh,$tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem)
	{
		$sql="UPDATE tin_tuc SET tieu_de=?,tom_tat=?,chi_tiet=?,hinh=?,tac_gia=?,ngay_dang=?,ngay_gui=?,so_luot_xem=? WHERE ma_tin_tuc=?";
		$this->SetQuery($sql);
		$param=array($tieu_de,$tom_tat,$chi_tiet,$hinh,$tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem,$ma_tin_tuc);
		return $this->execute($param);
	}
	//xoa tin tuc
	public function xoa_tin_tuc($ma_tin_tuc)
	{
		$sql="DELETE from tin_tuc WHERE ma_tin_tuc=?";
		$this->SetQuery($sql);
		$param=array($ma_tin_tuc);
		return $this->execute($param);
	}
	
}


?>