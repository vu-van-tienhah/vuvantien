<?php
@session_start();
class c_gio_hang
{
	protected $smarty;
	function xem_gio_hang()
	{
		include_once("smarty/libs/smarty_nhahang.php");
		$smarty=new smarty_nha_hang();
		$smarty->assign('tieude','gio hang');
		$giohang=$this->lay_gio_hang();
		if($giohang)//neu co gio hang
		{
			$gio_hang_thuc_don=array();
			$gio_hang_mon_an=array();
			foreach($giohang as $key->$value)
			{
				if(substr($key,0,1)=="t")//nếu chuỗi khóa được cắt bắt đầu từ 0 và cắt 1 kí tự mà  nó sẽ trả về là "t"
				$gio_hang_thuc_don[substr($key,1,strlen($key)-1)]=$value; //gán chuỗi đã cắt thành value (giá trị)
				else
				$gio_hang_mon_an[$key]=$value;
			}
			if($gio_hang_mon_an)//neu co chon mon
			{
				$_SESSION["gio_hang_mon_an"]=$gio_hang_mon_an;
				//lay thong tin mon an
				$smarty->assign('ds_mon_an',$this->lay_thong_tin_mon_an($gio_hang_mon_an));
					
			}
			if($gio_hang_thuc_don)//neu co gio hang thuc don
			{
				$_SESSION["gio_hang_thuc_don"]=$gio_hang_thuc_don;
				//lay thong tn thuc don
				$smarty->assign('ds_thuc_don',$this->lay_thong_tin_mon_an($gio_hang_thuc_don));		
			}
		}	
		$smarty->assign("view","views/giohang/v_gio_hang.tpl");
		$smarty->display("layout.tpl");	
	}
	function lay_gio_hang()
	{
		if(isset($_SESSION['gioHang']))
			return $_SESSION['gioHang'];
		else
		 	return false;
	}
	function themGiohang($masanpham,$so_luong,$don_gia)
	{
		if($so_luong>0)
		{
			if(isset($_SESSION["gioHang"][$masanpham])){
				$_SESSION["thanh_tien"] -= $_SESSION['gioHang'][$masanpham]*$don_gia;
				$_SESSION["so_luong"] -= $_SESSION['gioHang'][$masanpham];
				}
				$_SESSION["gioHang"][$masanpham]=$so_luong;
			if(isset($_SESSION['thanh_tien'])){
				$_SESSION["thanh_tien"]=$_SESSION["thanh_tien"]+$so_luong*$don_gia;
				$_SESSION["so_luong"]=$_SESSION["so_luong"]+$so_luong;
				}
			else{
				$_SESSION["thanh_tien"]=$so_luong*$don_gia;
				$_SESSION["so_luong"]=$so_luong;
				}
			
		}
		elseif($so_luong==0)
		{
			xoamathang($masanpham,$don_gia);
		}
			
	}
}

?>