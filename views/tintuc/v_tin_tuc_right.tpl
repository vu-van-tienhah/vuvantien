<h3 class="p1-thucdon">tin tuc moi</h3>

	
	{foreach $tin_tucs as $row} 
 
  <!--item-->
  	<div class="p2" style="margin:10px;float:left;width:175px;">
    <a href="javascript:void(0)" onclick="tintuc_ajax({$row->ma_tin_tuc})">
 	<figure ><img width="170px" height="150px" src="img/hinh_tin_tuc/{$row->hinh}" alt="" ></figure><div style="border-bottom:dashed #FF0000 1px;margin:5px"></div>
    <figure>
    <h4>{$row->tieu_de}</h4>
    </figure>
  	</a>
 <!--item--></div>
 	
    {/foreach}
	<div class="xoa"></div>
  	
 
