
<div class="main">
 <div class="container" >
    <h3 class="p1-thucdon">{$tieu_de_mon}</h3>
    <div class="khung_mon_an">
    	<div style="margin:auto;width:80%;">
        {foreach $mon_ans as $row}
    		<!--item-->
            
          <div class="ds_mon_an" style="margin:9px">
            <figure><a href="img/{$row->hinh}" class="hinh-mon_an"><img src="img/{$row->hinh}" alt="" ></a></figure>
            <h5><a href="chi_tiet_mon_an.php?ma_mon={$i}">{$row->ten_mon}</a></h5>
            <p class="p1 hide">{$row->noi_dung_tom_tat}</p>
            <p class="p2"><strong class="color-2">don gia:{number_format($row->don_gia)} đ -sl <input type="text" value="1" size="2"/></strong></p>
            <a class="button-1" href="#">mua</a> </div>
            <!--end item-->
        {/foreach}
        <div style="clear:both"></div>
        </div>
        <div class="phan_trang xoa"   align="center" style="margin:5px;">{$list}</div>
           
            
   	</div>
    <div style="clear:both"></div>
   
   
 </div>
</div>
