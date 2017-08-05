<?php
/* Smarty version 3.1.29, created on 2016-08-05 02:53:34
  from "C:\xampp\htdocs\baitap_onluyen_video_hoclap_trinh\lap_trinh_vien\admin\views\tin_tuc\v_tin_tuc.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a3e38e6a07b7_16318505',
  'file_dependency' => 
  array (
    '487e7006ea368e85cc7f85ac7db4db8a73e33bbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baitap_onluyen_video_hoclap_trinh\\lap_trinh_vien\\admin\\views\\tin_tuc\\v_tin_tuc.tpl',
      1 => 1470358337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a3e38e6a07b7_16318505 ($_smarty_tpl) {
echo '<script'; ?>
 language="javascript">
	function xoa_tin_tuc(ma_tin_tuc)
	{
		if(confirm("bạn có muốn xóa tin tức này không !"))
		{
			window.location="xoa_tin_tuc.php?ma_tin_tuc=" + ma_tin_tuc;
		}
	}
<?php echo '</script'; ?>
>

<div class="main">
<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
<table width="100%" border="0" cellpadding="5" cellspacing="6">
<div style="text-align:center;color:#F00;font-style:italic"><?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
echo $_smarty_tpl->tpl_vars['msg']->value;
}?></div>
    <tr style="background-color:#999;text-align:center;height:30px;color:#FFF">
    	<td>mã tin tức</td>
        <td>tiêu đề</td>
        <td>tóm tắt</td>
        <td>chi tiết</td>
        <td>hình</td>
        <td>tác giả</td>
        <td>ngày đăng</td>
        <td>ngày gửi</td>
        <td>số lượt xem</td>
        <td></td>
        <td></td>
    </tr>
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
    <tr valign="bottom">
    	<td><?php echo $_smarty_tpl->tpl_vars['row']->value->ma_tin_tuc;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->tieu_de;?>
</td>
        <td style="width:200px"><?php echo $_smarty_tpl->tpl_vars['row']->value->tom_tat;?>
</td>
        <td style="width:300px" class="bbp-author-name"><?php echo $_smarty_tpl->tpl_vars['row']->value->chi_tiet;?>
</td>
        <td><img src="../img/hinh_tin_tuc/<?php echo $_smarty_tpl->tpl_vars['row']->value->hinh;?>
"/></td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->tac_gia;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->ngay_dang;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->ngay_gui;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->so_luot_xem;?>
</td>
        <td><a href="sua_tin_tuc.php?ma_tin_tuc=<?php echo $_smarty_tpl->tpl_vars['row']->value->ma_tin_tuc;?>
">sửa</a></td>
        <!--kiem tra xoa loai mon an-->
        <td><a href="javascript:void(0)" onclick="xoa_tin_tuc(<?php echo $_smarty_tpl->tpl_vars['row']->value->ma_tin_tuc;?>
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
