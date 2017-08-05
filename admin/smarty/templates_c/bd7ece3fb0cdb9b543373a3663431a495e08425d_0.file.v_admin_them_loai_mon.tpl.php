<?php
/* Smarty version 3.1.29, created on 2016-08-03 23:30:50
  from "C:\xampp\htdocs\baitap_onluyen_video_hoclap_trinh\lap_trinh_vien\admin\views\loai_mon_an\v_admin_them_loai_mon.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a2628ae091e5_16935950',
  'file_dependency' => 
  array (
    'bd7ece3fb0cdb9b543373a3663431a495e08425d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baitap_onluyen_video_hoclap_trinh\\lap_trinh_vien\\admin\\views\\loai_mon_an\\v_admin_them_loai_mon.tpl',
      1 => 1470259845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a2628ae091e5_16935950 ($_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="public/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<div class="main">
<h3>them loai mon an</h3>
	<form method="post" name="frm_them_loai_mon_an" enctype="multipart/form-data">
    	<table width="900" border="0" cellpadding="20" cellspacing="20">
        	<tr>
            	<td>tên loại</td>
                <td><input type="text" name="ten_loai" id="ten_loai" size="48"/></td>
            </tr>
            <tr>
            	<td>mô tả</td>
                <td><textarea name="mo_ta" rows="5" cols="50" class="ckeditor" id="mo_ta"></textarea>
    				<?php echo '<script'; ?>
 language="javascript">ckeditor.replace("mo_ta")<?php echo '</script'; ?>
>
                </td>
            </tr>
            <tr>
            	<td>hình</td>
                <td><input type="file" name="hinh" id="hinh"/></td>
            </tr>
            <tr align="center">
            	<td colspan="2">
                <input type="submit" value="cập nhập" name="capnhap" onclick="return kt();"/>&nbsp;&nbsp;
                <input type="button" value="bỏ qua" onclick="window.location='loai_mon_an.php'"/>
                </td>
            </tr>
        </table>
    </form>
	
</div><?php }
}
