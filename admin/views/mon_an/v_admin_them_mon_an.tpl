<script type="text/javascript" src="public/ckeditor/ckeditor.js"></script>
<script>
	$(function(){
		$("#ngay_cap_nhap").datepicker({
			
			changeMonth:true,
			changeYear:true
			});
	});
</script>
<div class="main">
<h3>them mon an</h3>
<form method="post" name="form" enctype="multipart/form-data">
<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td>ten mon</td>
    <td><input type="text" name="ten_mon"></td>
  </tr>
  <tr>
    <td>loai mon</td>
    <td>
    	<select>
        	<option>mon canh bo duong</option>
        </select>
    </td>
  </tr>
  <tr>
    <td>noi dung tom tat</td>
    <td><textarea name="noi_dung_tom_tat" rows="5" cols="50"></textarea></td>
  </tr>
  <tr>
    <td>noi dung chi tiet</td>
    <td><textarea name="noi_dung_chi_tiet" rows="5" cols="50" class="ckeditor"id="noi_dung_chi_tiet"></textarea>
    	<script language="javascript">ckeditor.replace("noi_dung_chi_tiet")</script>
    </td>
  </tr>
  <tr>
    <td>don gia</td>
    <td><input name="don_gia" type="text"></td>
  </tr>
  <tr>
    <td>don gia khuyen mai</td>
    <td><input name="don_gia_khuyen_mai" type="text"></td>
  </tr>
  <tr>
    <td>khuyen mai</td>
    <td><input name="khuyen_mai" type="text"></td>
  </tr>
  <tr>
    <td>hinh</td>
    <td><input type="file" name="hinh"></td>
  </tr>
  <tr>
    <td>ngay cap nhap</td>
    <td><input name="ngay_cap_nhap" type="text" id="ngay_cap_nhap"></td>
  </tr>
  <tr>
    <td>don vi tinh</td>
    <td><input name="dvt" type="text"></td>
  </tr>
  <tr>
    <td>trong ngay</td>
    <td><input type="checkbox" name="trong_ngay"></td>
  </tr>
  <tr align="center">
  	<td colspan="2"><input type="submit" value="cap nhap" name="capnhap">&nbsp;&nbsp;
    <input type="button" value="bo qua" name="boqua" onClick="window.location='mon_an.php'">
    </td>
  </tr>
</table>
</form>
</div>