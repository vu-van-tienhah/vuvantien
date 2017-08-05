// JavaScript Document
$(document).ready(function(e) {
    $('a.button-1').click(function(){
		
		var $key=$(this).attr("id");//lay 1 chuoi gia tri trong bien id
		var $soluonginput="soluong"+$key;//khai bao id=soluong
		var $soluong=$($soluonginput).val();//khoi tao 
		
		
		var $dongiainput="dongia"+$key;
		var $dongia=$($dongiainput).val();
		
		
		var form_data={
			id :$key,
			soluong:$soluong,
			dongia:$dongia,
			};
		$.ajax({
			url:"mua_hang.php",
			type:'POST',
			async:false,
			data:form_data,
			dataType:"json",
			success: function(data){
				alert("so luong dat:"+data['sl']+".\nTong tien: "+formatCurrency(data['st'])+ "vnd." );
				},
				
			});
		return false;
		});//end click
});//end ready