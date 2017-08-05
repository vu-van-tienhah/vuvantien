
<h3 class="p1-thucdon">thuc don danh sach ngol</h3>
<div id="thucdon">
 	
    {foreach $thuc_dons as $thuc_don}
    <!--item-->
    <div class="p2-thucdon">
    <!--day là cú pháp để lấy get page về page={$smarty.get.page}-->
      <a href="thucdon.php?ma_thuc_don={$thuc_don->ma_thuc_don}&page={$page}"><figure><img src="img/{$thuc_don->hinh_thuc_don}" alt="" ></figure>
      <h5>{$thuc_don->ten_thuc_don}</h5></a>
      (gia {number_format($thuc_don->don_gia)}đ) 
   </div>
   <!--item-->
	{/foreach}
    <div class="phan_trang xoa"   align="center" style="margin:5px;">{$list}</div>
    <div style="clear:both"></div>
   
</div>

