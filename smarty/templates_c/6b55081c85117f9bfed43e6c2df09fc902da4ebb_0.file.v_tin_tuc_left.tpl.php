<?php
/* Smarty version 3.1.29, created on 2016-08-07 22:20:12
  from "C:\xampp\htdocs\baitap_onluyen_video_hoclap_trinh\lap_trinh_vien\views\tintuc\v_tin_tuc_left.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a797fc5b9cb4_45173376',
  'file_dependency' => 
  array (
    '6b55081c85117f9bfed43e6c2df09fc902da4ebb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baitap_onluyen_video_hoclap_trinh\\lap_trinh_vien\\views\\tintuc\\v_tin_tuc_left.tpl',
      1 => 1470600732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a797fc5b9cb4_45173376 ($_smarty_tpl) {
?>

<div class="img-indent-bot" style="width:500px" id="hienthi">
  	<h3 class="p1-thucdon"><?php echo $_smarty_tpl->tpl_vars['ct']->value->tieu_de;?>
</h3>
  	<div class="wrapper img-indent-bot">
    <figure class="img-indent"><img src="img/hinh_tin_tuc/<?php echo $_smarty_tpl->tpl_vars['ct']->value->hinh;?>
" alt="" width="210" height="125" ></figure>
    <h5><?php echo $_smarty_tpl->tpl_vars['ct']->value->tom_tat;?>
</h5>
	<p><?php echo $_smarty_tpl->tpl_vars['ct']->value->chi_tiet;?>
</p><p><?php echo $_smarty_tpl->tpl_vars['ct']->value->tac_gia;?>
</p> </div>
</div>
<?php }
}
