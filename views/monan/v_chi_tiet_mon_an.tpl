<!--
<div class="main">
	<div class="container">
    
    <!---->
    <div style="width:80%;margin:0 auto">
    	 <h3 class="p1-thucdon">{$mon_an->ten_mon}</h3>
         <img src="img/{$mon_an->hinh}" width="300" style="float:left;margin-right:20px;">
         <p class="p1">{$mon_an->noi_dung_tom_tat}<br>
         </p>
         <p class="p1">chi tiết: {$mon_an->noi_dung_chi_tiet}</p>
         <p class="p2"><strong class="color-2">don gia:{number_format($mon_an->don_gia)}-sl 
         <input type="hidden" id="dongia{$mon_an->ma_mon}" value="{$mon_an->don_gia}"/>
         <input type="text" value="1" size="2" id="soluong{$mon_an->ma_mon}"/>
         </strong></p>
         <a class="button-1" href="javascript:void(0)" id="{$mon_an->ma_mon}">mua</a> </div>
    </div>
    <!---->
  
    <div style="clear:both"></div>
   
<h3 class="p1-thucdon" style="margin-left:165px;margin-top:10px">{$monancungloai}</h3>
    <div class="khung_mon_an">
    	<div style="margin:auto;width:80%;">
        {foreach $mon_an_cung_loai as $row}
    		<!--item-->
            
          <div class="ds_mon_an" style="margin:9px">
            <figure><a href="img/{$row->hinh}" class="hinh-mon_an"><img src="img/{$row->hinh}" alt="" ></a></figure>
            <h5><a href="chi_tiet_mon_an.php?ma_mon={$row->ma_mon}&page={$smarty.get.page}">{$row->ten_mon}</a></h5>
            <p class="p1 hide">{$row->noi_dung_tom_tat}</p>
            <p class="p2"><strong class="color-2">don gia:{number_format($row->don_gia)} đ -sl
           <input type="hidden" id="dongia{$row->ma_mon}" value="{$row->don_gia}"/>
           <input type="text" value="1" size="2" id="soluong{$row->ma_mon}"/></strong></p>
            <a class="button-1" href="javascript:void(0)" id="{$row->ma_mon}">mua</a> </div>
            <!--end item-->
        {/foreach}
        <div class="phan_trang xoa"   align="center" style="margin:5px;">{$list}</div>
        <div style="clear:both"></div>
        </div>
</div>

  