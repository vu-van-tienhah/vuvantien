<?php
/* Smarty version 3.1.29, created on 2016-07-18 19:28:03
  from "C:\xampp\htdocs\baitap_onluyen_video_hoclap_trinh\lap_trinh_vien\smarty\templates\slide.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578d11a3245a12_01981431',
  'file_dependency' => 
  array (
    '7c5dd18687b83a62d8fdaeda1051e99abfede3d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baitap_onluyen_video_hoclap_trinh\\lap_trinh_vien\\smarty\\templates\\slide.tpl',
      1 => 1468862881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578d11a3245a12_01981431 ($_smarty_tpl) {
?>
<div class="main">
  <h2>Impressive Selection <span>for any Occasion</span></h2>
  <?php if (isset($_smarty_tpl->tpl_vars['noidung']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['noidung']->value;?>

  <?php }?>
  <div class="slider-wrapper">
    <div class="slider">
      <ul class="items">
        <li> <img src="layout/images/slider-img1.jpg" alt="" /> </li>
        <li> <img src="layout/images/slider-img2.jpg" alt="" /> </li>
        <li> <img src="layout/images/slider-img3.jpg" alt="" /> </li>
      </ul>
    </div>
  </div>
</div>
<?php }
}
