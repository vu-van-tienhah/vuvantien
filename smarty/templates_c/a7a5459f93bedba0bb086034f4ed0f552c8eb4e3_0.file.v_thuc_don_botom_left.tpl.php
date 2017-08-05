<?php
/* Smarty version 3.1.29, created on 2016-08-01 00:17:21
  from "C:\xampp\htdocs\baitap_onluyen_video_hoclap_trinh\lap_trinh_vien\views\thucdon\v_thuc_don_botom_left.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_579e78f17eeaf3_67186861',
  'file_dependency' => 
  array (
    'a7a5459f93bedba0bb086034f4ed0f552c8eb4e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baitap_onluyen_video_hoclap_trinh\\lap_trinh_vien\\views\\thucdon\\v_thuc_don_botom_left.tpl',
      1 => 1470003440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579e78f17eeaf3_67186861 ($_smarty_tpl) {
?>

<h3 class="p1-thucdon">thuc don danh sach ngol</h3>
<div id="thucdon">
 	
    <?php
$_from = $_smarty_tpl->tpl_vars['thuc_dons']->value;
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
    <div class="p2-thucdon">
    <!--day là cú pháp để lấy get page về page=<?php echo $_GET['page'];?>
-->
      <a href="thucdon.php?ma_thuc_don=<?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->ma_thuc_don;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><figure><img src="img/<?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->hinh_thuc_don;?>
" alt="" ></figure>
      <h5><?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->ten_thuc_don;?>
</h5></a>
      (gia <?php echo number_format($_smarty_tpl->tpl_vars['thuc_don']->value->don_gia);?>
đ) 
   </div>
   <!--item-->
	<?php
$_smarty_tpl->tpl_vars['thuc_don'] = $__foreach_thuc_don_0_saved_local_item;
}
if ($__foreach_thuc_don_0_saved_item) {
$_smarty_tpl->tpl_vars['thuc_don'] = $__foreach_thuc_don_0_saved_item;
}
?>
    <div class="phan_trang xoa"   align="center" style="margin:5px;"><?php echo $_smarty_tpl->tpl_vars['list']->value;?>
</div>
    <div style="clear:both"></div>
   
</div>

<?php }
}
