<script language="javascript">
	function xoa_tin_tuc(ma_tin_tuc)
	{
		if(confirm("bạn có muốn xóa tin tức này không !"))
		{
			window.location="xoa_tin_tuc.php?ma_tin_tuc=" + ma_tin_tuc;
		}
	}
</script>

<div class="main">
<h3>{$title}</h3>
<table width="100%" border="0" cellpadding="5" cellspacing="6">
<div style="text-align:center;color:#F00;font-style:italic">{if isset($msg)}{$msg}{/if}</div>
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
    {foreach $tin_tucs as $row}
    <tr valign="bottom">
    	<td>{$row->ma_tin_tuc}</td>
        <td>{$row->tieu_de}</td>
        <td style="width:200px">{$row->tom_tat}</td>
        <td style="width:300px" class="bbp-author-name">{$row->chi_tiet}</td>
        <td><img src="../img/hinh_tin_tuc/{$row->hinh}"/></td>
        <td>{$row->tac_gia}</td>
        <td>{$row->ngay_dang}</td>
        <td>{$row->ngay_gui}</td>
        <td>{$row->so_luot_xem}</td>
        <td><a href="sua_tin_tuc.php?ma_tin_tuc={$row->ma_tin_tuc}">sửa</a></td>
        <!--kiem tra xoa loai mon an-->
        <td><a href="javascript:void(0)" onclick="xoa_tin_tuc({$row->ma_tin_tuc})">xóa</a></td>
       
    </tr>
    
    {/foreach}
    <tr><td colspan="6"><div class="phan_trang"   align="center" style="margin:5px;">{$list}</div></td></tr>
   
    
</table>
</div>