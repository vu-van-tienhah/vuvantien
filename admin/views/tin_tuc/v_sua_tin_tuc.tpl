<script type="text/javascript" src="public/ckeditor/ckeditor.js"></script>
<script>
	$(function(){
		$("#ngay_dang").datepicker({
			
			changeMonth:true,
			changeYear:true
			});
	});
	$(function(){
		$("#ngay_gui").datepicker({
			
			changeMonth:true,
			changeYear:true
			});
	});
</script>
<div class="main">
<h3>{$title}</h3>
<form method="post" name="form" enctype="multipart/form-data">
<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td>tieu de</td>
    <td><input type="text" name="tieu_de" id="tieu_de" value="{$tin_tucs->tieu_de}"></td>
  </tr>
 
  <tr>
    <td>noi dung tom tat</td>
    <td><textarea name="tom_tat"id="tom_tat" rows="5" cols="50" >{$tin_tucs->tom_tat}</textarea></td>
  </tr>
  <tr>
    <td>noi dung chi tiet</td>
    <td><textarea name="chi_tiet"id="chi_tiet" rows="5" cols="50" class="ckeditor"id="chi_tiet" >{$tin_tucs->chi_tiet}</textarea>
    	<script language="javascript">ckeditor.replace("chi_tiet")</script>
    </td>
  </tr>
  <tr> 
    <td colspan="2"><img src="../img/hinh_tin_tuc/{$tin_tucs->hinh}"/></td>
  </tr>
  <tr>
    <td>hinh</td>
    <td><input type="file" name="hinh" id="hinh"></td>
  </tr>
  <tr>
    <td>tac gia</td>
    <td><input name="tac_gia" type="text" id="tac_gia"value="{$tin_tucs->tac_gia}"></td>
  </tr>
  <tr>
    <td>ngay dang</td>
    <td><input name="ngay_dang" id="ngay_dang" type="text" value="{$tin_tucs->ngay_dang}"></td>
  </tr>
 <tr>
    <td>ngay gui</td>
    <td><input name="ngay_gui" type="text" id="ngay_gui" value="{$tin_tucs->ngay_gui}"></td>
  </tr>
  <tr>
    <td> so luot xem </td>
    <td><input type="text" name="so_luot_xem" id="so_luot_xem"value="{$tin_tucs->trong_ngay}"></td>
  </tr>
  <tr align="center">
  	<td colspan="2"><input type="submit" value="cap nhap" name="capnhap">&nbsp;&nbsp;
    <input type="button" value="bo qua" name="boqua" onClick="window.location='tin_tuc.php'">
    </td>
  </tr>
</table>
</form>
</div>