// JavaScript Document
function xem_mon_an_theo_mua()
{
	var mua=document.getElementsByName("mua");
	var gt="";
	for(i=0;i<mua.length;i++)
	{
		if(mua.item(i).checked)
		{
			gt=mua.item(i).value;
			break;
		}
	}
	if(gt=="")
	{
		alert("vui long chon mon an theo mua !");
		return false;
	}
	// lay ra dc gia tri alert(gt);
	
	
	//ajax
	//1-khai bao doi tuong ajax
	var xmlhttp;
	//tìm ytinhf duyệt
	if(window.XMLHttpRequest)
	{
		//dung cho cac trinh duyet moi
		xmlhttp=new XMLHttpRequest();
	}
	else
	{	//dung cho cac trinh duyet IE5,IE6
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	//2-trả kết quả sau khi thi hành xong
	xmlhttp.onreadystatechange=function()
	{	//xử lí trạng thái 4 hoàn thành và tìm thấy trang 300 xử lí
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			//trả về dữ liệu hiển thị qua id="hiển thị"
			document.getElementById("hienthi").innerHTML=xmlhttp.responseText;
		}
	}
	//3-mở kết nối đén máy chủ,3 loại get,post+trang xử lí+tru là trang cần chứng thực
	xmlhttp.open("GET","xu_li_mon_an_theo_mua.php?mua="+gt,true);
	//4-gửi thông tin
	xmlhttp.send();
}
function tim_mon_an(gttim)
{
	//alert(gttim);
	//ajax
	//1-khai bao doi tuong ajax
	var xmlhttp;
	//tìm ytinhf duyệt
	if(window.XMLHttpRequest)
	{
		//dung cho cac trinh duyet moi
		xmlhttp=new XMLHttpRequest();
	}
	else
	{	//dung cho cac trinh duyet IE5,IE6
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	//2-trả kết quả sau khi thi hành xong
	xmlhttp.onreadystatechange=function()
	{	//xử lí trạng thái 4 hoàn thành và tìm thấy trang 300 xử lí
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			//trả về dữ liệu hiển thị qua id="hiển thị"
			document.getElementById("hienthi").innerHTML=xmlhttp.responseText;
		}
	}
	//3-mở kết nối đén máy chủ,3 loại get,post+trang xử lí+tru là trang cần chứng thực
	xmlhttp.open("POST","xu_li_tim_mon_an.php",true);
	var data=new FormData();
	data.append("gttim",gttim);
	//4-gửi thông tin
	xmlhttp.send(data);
}
function tintuc_ajax(ma_tin_tuc)
{
	//ajax
	//1-khai bao doi tuong ajax
	var xmlhttp;
	//tìm ytinhf duyệt
	if(window.XMLHttpRequest)
	{
		//dung cho cac trinh duyet moi
		xmlhttp=new XMLHttpRequest();
	}
	else
	{	//dung cho cac trinh duyet IE5,IE6
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	//2-trả kết quả sau khi thi hành xong
	xmlhttp.onreadystatechange=function()
	{	//xử lí trạng thái 4 hoàn thành và tìm thấy trang 300 xử lí
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			//trả về dữ liệu hiển thị qua id="hiển thị"
			document.getElementById("hienthi").innerHTML=xmlhttp.responseText;
		}
	}
	//3-mở kết nối đén máy chủ,3 loại get,post+trang xử lí+tru là trang cần chứng thực
	xmlhttp.open("POST","xu_li_tin_tuc.php",true);
	var data=new FormData();
	data.append("ma_tin_tuc",ma_tin_tuc);
	//4-gửi thông tin
	xmlhttp.send(data);
}



