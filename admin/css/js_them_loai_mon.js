// JavaScript Document
function kt()
{
	var ten_loai=document.getElementById("ten_loai");
	
		if(ten_loai.value=="")
		{
			alert("vui long nhap vao ten loai !");
			ten_loai.focus();
			return false; 
		}
		return true;
		
	
}
function kt_sua_loai_mon_an()
{
	
	var ten_loai=document.getElementById("ten_loai");
	
		if(ten_loai.value=="")
		{
			alert("vui long nhap vao ten loai !");
			ten_loai.focus();
			return false; 
		}
	return true;
}