<?php
/* Smarty version 3.1.29, created on 2016-08-07 22:20:12
  from "C:\xampp\htdocs\baitap_onluyen_video_hoclap_trinh\lap_trinh_vien\views\tintuc\v_tin_tuc.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a797fc596a32_68745986',
  'file_dependency' => 
  array (
    'a24cc35e296a5086704ae2785c86de60ac9b20dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baitap_onluyen_video_hoclap_trinh\\lap_trinh_vien\\views\\tintuc\\v_tin_tuc.tpl',
      1 => 1470600767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/tintuc/v_tin_tuc_left.tpl' => 1,
    'file:views/tintuc/v_tin_tuc_right.tpl' => 1,
  ),
),false)) {
function content_57a797fc596a32_68745986 ($_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="layout/js/thu_vien_ajax.js"><?php echo '</script'; ?>
>
<div class="main">
    <div class="wrapper">
    	<article class="col-1">
        <div class="indent-left">
        	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/tintuc/v_tin_tuc_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        	
        </div>
      </article>
      <article class="col-2" style="margin-left:200px;width:410px;">
        	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/tintuc/v_tin_tuc_right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      	
      </article>
	</div>   
</div><?php }
}
