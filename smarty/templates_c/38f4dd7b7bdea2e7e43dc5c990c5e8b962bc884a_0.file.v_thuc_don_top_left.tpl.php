<?php
/* Smarty version 3.1.29, created on 2016-08-26 16:34:03
  from "C:\xampp\htdocs\baitap_onluyen_video_hoclap_trinh\lap_trinh_vien\views\thucdon\v_thuc_don_top_left.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c0535b95dbc0_87995923',
  'file_dependency' => 
  array (
    '38f4dd7b7bdea2e7e43dc5c990c5e8b962bc884a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baitap_onluyen_video_hoclap_trinh\\lap_trinh_vien\\views\\thucdon\\v_thuc_don_top_left.tpl',
      1 => 1470685612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c0535b95dbc0_87995923 ($_smarty_tpl) {
?>

<div class="img-indent-bot-top">
  <h3 ><?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->ten_thuc_don;?>
</h3>
  <div >
    <figure class="img-indent"><img src="img/<?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->hinh_thuc_don;?>
" alt="" width="210" height="125"></figure>
    <div >
     
      <h5>GIA:<?php echo number_format($_smarty_tpl->tpl_vars['thuc_don']->value->don_gia);?>
 VNĐ</h5>
      <?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->noi_dung;?>
</div>
      <input type="text" value="1" id="soluongt<?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->ma_thuc_don;?>
"style="width:29px;height:33px;margin-right:3px" />
      <input type="hidden" id="dongiat<?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->ma_thuc_don;?>
" value="<?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->don_gia;?>
"/>
      <a class="button-1" href="JavaScript:void(0)"  id="t<?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->ma_thuc_don;?>
" >MUA</a>
  
  </div>
<?php }
}
