<?php
/* Smarty version 3.1.29, created on 2016-07-21 18:13:14
  from "C:\xampp\htdocs\baitap_onluyen_video_hoclap_trinh\lap_trinh_vien\views\thucdon\v_thuc_don.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5790f49a1ef987_63132634',
  'file_dependency' => 
  array (
    '290b0838cc0fd5dd09571e731c2d574adfe7ebfa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baitap_onluyen_video_hoclap_trinh\\lap_trinh_vien\\views\\thucdon\\v_thuc_don.tpl',
      1 => 1469117592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/thucdon/v_thuc_don_top_left.tpl' => 1,
    'file:views/thucdon/v_thuc_don_botom_left.tpl' => 1,
    'file:views/thucdon/v_thuc_don_right_left.tpl' => 1,
  ),
),false)) {
function content_5790f49a1ef987_63132634 ($_smarty_tpl) {
?>
<div class="main">
    <div class="wrapper">
    	<article class="col-1">
        <div class="indent-left">
        	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/thucdon/v_thuc_don_top_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/thucdon/v_thuc_don_botom_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
      </article>
      <article class="col-2" style="margin-left:200px;width:410px;">
        
      	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/thucdon/v_thuc_don_right_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
      </article>
	</div>   
</div><?php }
}
