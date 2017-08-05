<?php
/* Smarty version 3.1.29, created on 2016-08-08 20:00:11
  from "C:\xampp\htdocs\baitap_onluyen_video_hoclap_trinh\lap_trinh_vien\views\tintuc\v_tin_tuc_right.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a8c8ab24f5c5_12460224',
  'file_dependency' => 
  array (
    '40cc33a2572868e927b8c72bdd29c7450edd66d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baitap_onluyen_video_hoclap_trinh\\lap_trinh_vien\\views\\tintuc\\v_tin_tuc_right.tpl',
      1 => 1470679207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a8c8ab24f5c5_12460224 ($_smarty_tpl) {
?>
<h3 class="p1-thucdon">tin tuc moi</h3>

	
	<?php
$_from = $_smarty_tpl->tpl_vars['tin_tucs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?> 
 
  <!--item-->
  	<div class="p2" style="margin:10px;float:left;width:175px;">
    <a href="javascript:void(0)" onclick="tintuc_ajax(<?php echo $_smarty_tpl->tpl_vars['row']->value->ma_tin_tuc;?>
)">
 	<figure ><img width="170px" height="150px" src="img/hinh_tin_tuc/<?php echo $_smarty_tpl->tpl_vars['row']->value->hinh;?>
" alt="" ></figure><div style="border-bottom:dashed #FF0000 1px;margin:5px"></div>
    <figure>
    <h4><?php echo $_smarty_tpl->tpl_vars['row']->value->tieu_de;?>
</h4>
    </figure>
  	</a>
 <!--item--></div>
 	
    <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
	<div class="xoa"></div>
  	
 
<?php }
}
