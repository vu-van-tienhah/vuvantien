<?php
/* Smarty version 3.1.29, created on 2016-07-27 21:23:36
  from "C:\xampp\htdocs\baitap_onluyen_video_hoclap_trinh\lap_trinh_vien\admin\views\mon_an\v_admin_mon_an.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57990a38b84bb0_08149941',
  'file_dependency' => 
  array (
    '65842fbe1ae9b213b5111569d8ffcf7baad6e9de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baitap_onluyen_video_hoclap_trinh\\lap_trinh_vien\\admin\\views\\mon_an\\v_admin_mon_an.tpl',
      1 => 1469647411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57990a38b84bb0_08149941 ($_smarty_tpl) {
?>
<div class="main">
	<h3>danh sach mon an</h3>
    <table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr style="background-color:#999;text-align:center;height:30px;color:#FFF">
    <td>mã món</td>
    <td>tên món</td>
    <td>nội dung tóm tắt</td>
    <td>đơn giá</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 6+1 - (0) : 0-(6)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
  <tr>
    <td>1</td>
    <td>bánh canh</td>
    <td>Nguyên liệu: 3 quả dưa chuột, 3 quả cà chua, 1/2 quả dứa, xà lách xoăn, hành tây, tỏi, đường, dấm, ớt...</td>
    <td>25000đ</td>
    <td><a href="sua_mon_an.php?ma_mon=1">sửa</a></td>
    <td><a href="xoa_mon_an.php?ma_mon=1">xóa</a></td>
  </tr>
  <?php }
}
?>

</table>

</div><?php }
}
