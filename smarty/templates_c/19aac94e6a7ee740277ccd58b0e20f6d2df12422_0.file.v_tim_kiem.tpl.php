<?php
/* Smarty version 3.1.29, created on 2016-08-07 20:04:42
  from "C:\xampp\htdocs\baitap_onluyen_video_hoclap_trinh\lap_trinh_vien\views\timkiem\v_tim_kiem.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a7783a231dd6_40616379',
  'file_dependency' => 
  array (
    '19aac94e6a7ee740277ccd58b0e20f6d2df12422' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baitap_onluyen_video_hoclap_trinh\\lap_trinh_vien\\views\\timkiem\\v_tim_kiem.tpl',
      1 => 1470592880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a7783a231dd6_40616379 ($_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="layout/js/thu_vien_ajax.js"><?php echo '</script'; ?>
>
<div class="main">
	<table width="100%" cellspacing="15" bgcolor="#CCCCCC">
    	<tr align="center">
        	
            <td><label>nhập tên món</label>  
            <input type="text"  name="tim" placeholder="nhập tên cần tìm" onkeyup="tim_mon_an(this.value)"/></td>
        </tr>
    </table>
    <div id="hienthi"></div>
</div><?php }
}
