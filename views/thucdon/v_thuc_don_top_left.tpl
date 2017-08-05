
<div class="img-indent-bot-top">
  <h3 >{$thuc_don->ten_thuc_don}</h3>
  <div >
    <figure class="img-indent"><img src="img/{$thuc_don->hinh_thuc_don}" alt="" width="210" height="125"></figure>
    <div >
     
      <h5>GIA:{number_format($thuc_don->don_gia)} VNĐ</h5>
      {$thuc_don->noi_dung}</div>
      <input type="text" value="1" id="soluongt{$thuc_don->ma_thuc_don}"style="width:29px;height:33px;margin-right:3px" />
      <input type="hidden" id="dongiat{$thuc_don->ma_thuc_don}" value="{$thuc_don->don_gia}"/>
      <a class="button-1" href="JavaScript:void(0)"  id="t{$thuc_don->ma_thuc_don}" >MUA</a>
  
  </div>
