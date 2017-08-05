<?php
/* Smarty version 3.1.29, created on 2016-08-05 00:26:29
  from "C:\xampp\htdocs\baitap_onluyen_video_hoclap_trinh\lap_trinh_vien\admin\views\tin_tuc\v_them_tin_tuc.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a3c11528b572_58347838',
  'file_dependency' => 
  array (
    '333a776349b1f39e1791136382799b23a1fcf636' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baitap_onluyen_video_hoclap_trinh\\lap_trinh_vien\\admin\\views\\tin_tuc\\v_them_tin_tuc.tpl',
      1 => 1470348678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a3c11528b572_58347838 ($_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="public/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>
<div class="main">
<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
<form method="post" name="form" enctype="multipart/form-data">
<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td>tieu de</td>
    <td><input type="text" name="tieu_de" id="tieu_de"></td>
  </tr>
 
  <tr>
    <td>noi dung tom tat</td>
    <td><textarea name="tom_tat" rows="5" cols="50" id="tom_tat"></textarea></td>
  </tr>
  <tr>
    <td>noi dung chi tiet</td>
    <td><textarea name="chi_tiet" rows="5" cols="50" class="ckeditor"id="chi_tiet"></textarea>
    	<?php echo '<script'; ?>
 language="javascript">ckeditor.replace("chi_tiet")<?php echo '</script'; ?>
>
    </td>
  </tr>
  <tr>
    <td>hinh</td>
    <td><input type="file" name="hinh"></td>
  </tr>
  <tr>
    <td>tac gia</td>
    <td><input name="tac_gia" type="text"></td>
  </tr>
  <tr>
    <td>ngay dang</td>
    <td><input name="ngay_dang" id="ngay_dang" type="text"></td>
  </tr>
 <tr>
    <td>ngay gui</td>
    <td><input name="ngay_gui" type="text" id="ngay_gui"></td>
  </tr>
  <tr>
    <td> so luot xem </td>
    <td><input type="text" name="trong_ngay"></td>
  </tr>
  <tr align="center">
  	<td colspan="2"><input type="submit" value="cap nhap" name="capnhap">&nbsp;&nbsp;
    <input type="button" value="bo qua" name="boqua" onClick="window.location='tin_tuc.php'">
    </td>
  </tr>
</table>
</form>
</div><?php }
}
