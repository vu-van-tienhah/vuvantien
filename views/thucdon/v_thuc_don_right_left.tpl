<h3 class="p1-thucdon">chi tiet thuc don</h3>

	
	{foreach $ct as $thuc_don}
 
  <!--item-->
  	<div class="than-right">
 	<figure class="indent">
    <h4>{$thuc_don->ten_mon}</h4>
    <h5> gia:{number_format($thuc_don->don_gia)}đ</h5>
    <p>{$thuc_don->noi_dung_tom_tat}</p> 
    <a class="button-1" href="#">xem tiep</a></figure>
    <figure class="img-indent-right"><img src="img/{$thuc_don->hinh}" alt="" ></figure>
  	<div style="border-bottom:dashed #FF0000 1px;margin:5px"></div>
 <!--item--></div>
 	
    {/foreach}
	<div class="xoa"></div>
  	
 
