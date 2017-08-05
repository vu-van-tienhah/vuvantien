<?php
/* Smarty version 3.1.29, created on 2016-08-03 23:48:52
  from "C:\xampp\htdocs\baitap_onluyen_video_hoclap_trinh\lap_trinh_vien\admin\views\loai_mon_an\v_admin_sua_loai_mon_an.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a266c431ac04_31757111',
  'file_dependency' => 
  array (
    '01da6ed1835469de92d5d463ac28442a1cd576ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baitap_onluyen_video_hoclap_trinh\\lap_trinh_vien\\admin\\views\\loai_mon_an\\v_admin_sua_loai_mon_an.tpl',
      1 => 1470260904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a266c431ac04_31757111 ($_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="public/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<div class="main">
<h3>sủa loai mon an</h3>
	<form method="post" name="frm_sua_loai_mon_an" enctype="multipart/form-data">
    	<table width="900" border="0" cellpadding="20" cellspacing="20">
        	<tr>
            	<td>tên loại</td>
                <td><input type="text" name="ten_loai" id="ten_loai" size="48" value="<?php echo $_smarty_tpl->tpl_vars['loai_mons']->value->ten_loai;?>
"/></td>
            </tr>
            <tr>
            	<td>mô tả</td>
                <td><textarea name="mo_ta" rows="6" cols="50" id="mo_ta" class="ckeditor"><?php echo $_smarty_tpl->tpl_vars['loai_mons']->value->mo_ta;?>
</textarea><?php echo '<script'; ?>
 language="javascript">ckeditor.replace("mo_ta")<?php echo '</script'; ?>
></td>
            </tr>
            <tr>
           		<td colspan="2"><img src="../img/hinh_loai_mon_an/<?php echo $_smarty_tpl->tpl_vars['loai_mons']->value->hinh;?>
"/></td>
            </tr>
            <tr>
            	<td>hình</td>
                <td><input type="file" name="hinh" id="hinh"/></td>
            </tr>
            <tr align="center">
            	<td colspan="2">
                <input type="submit" value="cập nhập" name="capnhap" onclick="return kt_sua_loai_mon_an()"/>&nbsp;&nbsp;
                <input type="button" value="bỏ qua" onclick="window.location='loai_mon_an.php'"/>
                </td>
            </tr>
        </table>
    </form>
	
</div><?php }
}
