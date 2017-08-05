<?php
/* Smarty version 3.1.29, created on 2016-08-08 21:44:22
  from "C:\xampp\htdocs\baitap_onluyen_video_hoclap_trinh\lap_trinh_vien\views\monan\v_chi_tiet_mon_an.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a8e116c5dd31_47501628',
  'file_dependency' => 
  array (
    '7610bc07297adaae77d0dcc3c0dcd567a6ca07a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baitap_onluyen_video_hoclap_trinh\\lap_trinh_vien\\views\\monan\\v_chi_tiet_mon_an.tpl',
      1 => 1470678062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a8e116c5dd31_47501628 ($_smarty_tpl) {
?>
<!--
<div class="main">
	<div class="container">
    
    <!---->
    <div style="width:80%;margin:0 auto">
    	 <h3 class="p1-thucdon"><?php echo $_smarty_tpl->tpl_vars['mon_an']->value->ten_mon;?>
</h3>
         <img src="img/<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->hinh;?>
" width="300" style="float:left;margin-right:20px;">
         <p class="p1"><?php echo $_smarty_tpl->tpl_vars['mon_an']->value->noi_dung_tom_tat;?>
<br>
         </p>
         <p class="p1">chi tiết: <?php echo $_smarty_tpl->tpl_vars['mon_an']->value->noi_dung_chi_tiet;?>
</p>
         <p class="p2"><strong class="color-2">don gia:<?php echo number_format($_smarty_tpl->tpl_vars['mon_an']->value->don_gia);?>
-sl 
         <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->ma_mon;?>
" value="<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->don_gia;?>
"/>
         <input type="text" value="1" size="2" id="soluong<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->ma_mon;?>
"/>
         </strong></p>
         <a class="button-1" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->ma_mon;?>
">mua</a> </div>
    </div>
    <!---->
  
    <div style="clear:both"></div>
   
<h3 class="p1-thucdon" style="margin-left:165px;margin-top:10px"><?php echo $_smarty_tpl->tpl_vars['monancungloai']->value;?>
</h3>
    <div class="khung_mon_an">
    	<div style="margin:auto;width:80%;">
        <?php
$_from = $_smarty_tpl->tpl_vars['mon_an_cung_loai']->value;
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
            
          <div class="ds_mon_an" style="margin:9px">
            <figure><a href="img/<?php echo $_smarty_tpl->tpl_vars['row']->value->hinh;?>
" class="hinh-mon_an"><img src="img/<?php echo $_smarty_tpl->tpl_vars['row']->value->hinh;?>
" alt="" ></a></figure>
            <h5><a href="chi_tiet_mon_an.php?ma_mon=<?php echo $_smarty_tpl->tpl_vars['row']->value->ma_mon;?>
&page=<?php echo $_GET['page'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->ten_mon;?>
</a></h5>
            <p class="p1 hide"><?php echo $_smarty_tpl->tpl_vars['row']->value->noi_dung_tom_tat;?>
</p>
            <p class="p2"><strong class="color-2">don gia:<?php echo number_format($_smarty_tpl->tpl_vars['row']->value->don_gia);?>
 đ -sl
           <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['row']->value->ma_mon;?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->don_gia;?>
"/>
           <input type="text" value="1" size="2" id="soluong<?php echo $_smarty_tpl->tpl_vars['row']->value->ma_mon;?>
"/></strong></p>
            <a class="button-1" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['row']->value->ma_mon;?>
">mua</a> </div>
            <!--end item-->
        <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
        <div class="phan_trang xoa"   align="center" style="margin:5px;"><?php echo $_smarty_tpl->tpl_vars['list']->value;?>
</div>
        <div style="clear:both"></div>
        </div>
</div>

  <?php }
}
