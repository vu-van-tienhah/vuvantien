<?php
/* Smarty version 3.1.29, created on 2016-07-31 19:58:25
  from "C:\xampp\htdocs\baitap_onluyen_video_hoclap_trinh\lap_trinh_vien\views\thucdon\v_thuc_don_right_left.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_579e3c41432187_85341985',
  'file_dependency' => 
  array (
    '8fc3693ec90a1d24a10d5d4965cb96fc51803cf3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baitap_onluyen_video_hoclap_trinh\\lap_trinh_vien\\views\\thucdon\\v_thuc_don_right_left.tpl',
      1 => 1469987882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579e3c41432187_85341985 ($_smarty_tpl) {
?>
<h3 class="p1-thucdon">chi tiet thuc don</h3>

	
	<?php
$_from = $_smarty_tpl->tpl_vars['ct']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_thuc_don_0_saved_item = isset($_smarty_tpl->tpl_vars['thuc_don']) ? $_smarty_tpl->tpl_vars['thuc_don'] : false;
$_smarty_tpl->tpl_vars['thuc_don'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['thuc_don']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['thuc_don']->value) {
$_smarty_tpl->tpl_vars['thuc_don']->_loop = true;
$__foreach_thuc_don_0_saved_local_item = $_smarty_tpl->tpl_vars['thuc_don'];
?>
 
  <!--item-->
  	<div class="than-right">
 	<figure class="indent">
    <h4><?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->ten_mon;?>
</h4>
    <h5> gia:<?php echo number_format($_smarty_tpl->tpl_vars['thuc_don']->value->don_gia);?>
đ</h5>
    <p><?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->noi_dung_tom_tat;?>
</p> 
    <a class="button-1" href="#">xem tiep</a></figure>
    <figure class="img-indent-right"><img src="img/<?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->hinh;?>
" alt="" ></figure>
  	<div style="border-bottom:dashed #FF0000 1px;margin:5px"></div>
 <!--item--></div>
 	
    <?php
$_smarty_tpl->tpl_vars['thuc_don'] = $__foreach_thuc_don_0_saved_local_item;
}
if ($__foreach_thuc_don_0_saved_item) {
$_smarty_tpl->tpl_vars['thuc_don'] = $__foreach_thuc_don_0_saved_item;
}
?>
	<div class="xoa"></div>
  	
 
<?php }
}
