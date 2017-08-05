<script type="text/javascript" src="public/ckeditor/ckeditor.js"></script>
<div class="main">
<h3>them loai mon an</h3>
	<form method="post" name="frm_them_loai_mon_an" enctype="multipart/form-data">
    	<table width="900" border="0" cellpadding="20" cellspacing="20">
        	<tr>
            	<td>tên loại</td>
                <td><input type="text" name="ten_loai" id="ten_loai" size="48"/></td>
            </tr>
            <tr>
            	<td>mô tả</td>
                <td><textarea name="mo_ta" rows="5" cols="50" class="ckeditor" id="mo_ta"></textarea>
    				<script language="javascript">ckeditor.replace("mo_ta")</script>
                </td>
            </tr>
            <tr>
            	<td>hình</td>
                <td><input type="file" name="hinh" id="hinh"/></td>
            </tr>
            <tr align="center">
            	<td colspan="2">
                <input type="submit" value="cập nhập" name="capnhap" onclick="return kt();"/>&nbsp;&nbsp;
                <input type="button" value="bỏ qua" onclick="window.location='loai_mon_an.php'"/>
                </td>
            </tr>
        </table>
    </form>
	
</div>