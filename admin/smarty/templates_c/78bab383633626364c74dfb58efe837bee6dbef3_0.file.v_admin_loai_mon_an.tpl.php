<?php
/* Smarty version 3.1.29, created on 2016-08-04 01:32:13
  from "C:\xampp\htdocs\baitap_onluyen_video_hoclap_trinh\lap_trinh_vien\admin\views\loai_mon_an\v_admin_loai_mon_an.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a27efd0c69c7_63843725',
  'file_dependency' => 
  array (
    '78bab383633626364c74dfb58efe837bee6dbef3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baitap_onluyen_video_hoclap_trinh\\lap_trinh_vien\\admin\\views\\loai_mon_an\\v_admin_loai_mon_an.tpl',
      1 => 1470267129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a27efd0c69c7_63843725 ($_smarty_tpl) {
echo '<script'; ?>
 language="javascript">
	function xoa_loai_mon_an(ma_loai)
	{
		if(confirm("bạn có muốn xóa loại món ăn này ?"))
		{
			window.location="xoa_loai_mon_an.php?ma_loai=" + ma_loai;
		}
	}
<?php echo '</script'; ?>
>
<div class="main">
<h3>loai mon an</h3>
<h3 style="text-align:center;color:#F00;font-style:italic"><?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
echo $_smarty_tpl->tpl_vars['msg']->value;
}?></h3>
<table width="100%" border="0" cellpadding="5" cellspacing="6">
	
    <tr style="background-color:#999;text-align:center;height:30px;color:#FFF">
    	<td>mã loại</td>
        <td>tên loại</td>
        <td>mô tả</td>
        <td>hinh</td>
        <td></td>
        <td></td>
    </tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['loai_mons']->value;
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
    <tr valign="bottom">
    	<td><?php echo $_smarty_tpl->tpl_vars['row']->value->ma_loai;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->ten_loai;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->mo_ta;?>
</td>
        <td><img src="../img/hinh_loai_mon_an/<?php echo $_smarty_tpl->tpl_vars['row']->value->hinh;?>
"/></td>
        <td><a href="sua_loai_mon_an.php?ma_loai=<?php echo $_smarty_tpl->tpl_vars['row']->value->ma_loai;?>
">sửa</a></td>
        <!--kiem tra xoa loai mon an-->
        <td><a href="javascript:void(0)" onclick="xoa_loai_mon_an(<?php echo $_smarty_tpl->tpl_vars['row']->value->ma_loai;?>
)">xóa</a></td>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
    
    <tr><td colspan="6"><div class="phan_trang"   align="center" style="margin:5px;"><?php echo $_smarty_tpl->tpl_vars['list']->value;?>
</div></td></tr>
    
</table>
</div><?php }
}
