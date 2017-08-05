<div class="main">
	<h3>danh sach mon an</h3>
    <table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr style="background-color:#999;text-align:center;height:30px;color:#FFF">
    <td>mã món</td>
    <td>tên món</td>
    <td>nội dung tóm tắt</td>
    <td>đơn giá</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  {for $i=0 to 6}
  <tr>
    <td>1</td>
    <td>bánh canh</td>
    <td>Nguyên liệu: 3 quả dưa chuột, 3 quả cà chua, 1/2 quả dứa, xà lách xoăn, hành tây, tỏi, đường, dấm, ớt...</td>
    <td>25000đ</td>
    <td><a href="sua_mon_an.php?ma_mon=1">sửa</a></td>
    <td><a href="xoa_mon_an.php?ma_mon=1">xóa</a></td>
  </tr>
  {/for}
</table>

</div>