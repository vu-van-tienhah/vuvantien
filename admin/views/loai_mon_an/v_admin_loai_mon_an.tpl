<script language="javascript">
	function xoa_loai_mon_an(ma_loai)
	{
		if(confirm("bạn có muốn xóa loại món ăn này ?"))
		{
			window.location="xoa_loai_mon_an.php?ma_loai=" + ma_loai;
		}
	}
</script>
<div class="main">
<h3>loai mon an</h3>
<h3 style="text-align:center;color:#F00;font-style:italic">{if isset($msg)}{$msg}{/if}</h3>
<table width="100%" border="0" cellpadding="5" cellspacing="6">
	
    <tr style="background-color:#999;text-align:center;height:30px;color:#FFF">
    	<td>mã loại</td>
        <td>tên loại</td>
        <td>mô tả</td>
        <td>hinh</td>
        <td></td>
        <td></td>
    </tr>
    {foreach $loai_mons as $row}
    <tr valign="bottom">
    	<td>{$row->ma_loai}</td>
        <td>{$row->ten_loai}</td>
        <td>{$row->mo_ta}</td>
        <td><img src="../img/hinh_loai_mon_an/{$row->hinh}"/></td>
        <td><a href="sua_loai_mon_an.php?ma_loai={$row->ma_loai}">sửa</a></td>
        <!--kiem tra xoa loai mon an-->
        <td><a href="javascript:void(0)" onclick="xoa_loai_mon_an({$row->ma_loai})">xóa</a></td>
    </tr>
    {/foreach}
    
    <tr><td colspan="6"><div class="phan_trang"   align="center" style="margin:5px;">{$list}</div></td></tr>
    
</table>
</div>