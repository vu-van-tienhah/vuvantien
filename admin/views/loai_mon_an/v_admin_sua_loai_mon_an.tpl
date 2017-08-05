<script type="text/javascript" src="public/ckeditor/ckeditor.js"></script>
<div class="main">
<h3>sủa loai mon an</h3>
	<form method="post" name="frm_sua_loai_mon_an" enctype="multipart/form-data">
    	<table width="900" border="0" cellpadding="20" cellspacing="20">
        	<tr>
            	<td>tên loại</td>
                <td><input type="text" name="ten_loai" id="ten_loai" size="48" value="{$loai_mons->ten_loai}"/></td>
            </tr>
            <tr>
            	<td>mô tả</td>
                <td><textarea name="mo_ta" rows="6" cols="50" id="mo_ta" class="ckeditor">{$loai_mons->mo_ta}</textarea><script language="javascript">ckeditor.replace("mo_ta")</script></td>
            </tr>
            <tr>
           		<td colspan="2"><img src="../img/hinh_loai_mon_an/{$loai_mons->hinh}"/></td>
            </tr>
            <tr>
            	<td>hình</td>
                <td><input type="file" name="hinh" id="hinh"/></td>
            </tr>
            <tr align="center">
            	<td colspan="2">
                <input type="submit" value="cập nhập" name="capnhap" onclick="return kt_sua_loai_mon_an()"/>&nbsp;&nbsp;
                <input type="button" value="bỏ qua" onclick="window.location='loai_mon_an.php'"/>
                </td>
            </tr>
        </table>
    </form>
	
</div>