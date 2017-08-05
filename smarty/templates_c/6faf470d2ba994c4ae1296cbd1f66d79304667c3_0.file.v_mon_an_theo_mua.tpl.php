<?php
/* Smarty version 3.1.29, created on 2016-08-07 02:45:46
  from "C:\xampp\htdocs\baitap_onluyen_video_hoclap_trinh\lap_trinh_vien\views\monan\v_mon_an_theo_mua.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a684ba83e575_88521939',
  'file_dependency' => 
  array (
    '6faf470d2ba994c4ae1296cbd1f66d79304667c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baitap_onluyen_video_hoclap_trinh\\lap_trinh_vien\\views\\monan\\v_mon_an_theo_mua.tpl',
      1 => 1470530543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a684ba83e575_88521939 ($_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="layout/js/thu_vien_ajax.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="layout/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="layout/js/jquery.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="layout/js/bootstrap.min.css"/>
<div class="main" style="margin:0 auto;border:1px solid #999">
	<div>
		<table align="center" width="100%" border="1" cellpadding="15" bgcolor="#CCCCCC" cellspacing="5">
        	<tr>
            <td align="center">XEM MON AN THEO MUA</td>
            </tr>
            <tr>
            <td align="center" style="padding:10px;">
            	<input type="radio" name="mua" id="xuan" value="xuan"/><label style="cursor:pointer" for="mua">mùa xuân</label>
                <input type="radio" name="mua" id="ha" value="ha"/><label style="cursor:pointer" for="mua">mùa hạ</label>
                <input type="radio" name="mua" id="thu" value="thu"/><label style="cursor:pointer" for="mua">mùa thu</label>
            	<input type="radio" name="mua" id="dong" value="dong"/><label style="cursor:pointer" for="mua">mùa đông</label>
            </td>
            </tr>
            <tr>
            	<td align="center"><input class="button-2" value="hiển thị" onclick="xem_mon_an_theo_mua()" type="button" name="xem" /></td>
            </tr>
           
        
        </table> 
        <div id="hienthi">
        	
  			
		</div>
        
         
    </div>
</div><?php }
}
