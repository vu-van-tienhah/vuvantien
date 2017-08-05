<?php
require_once("moduls/m_mon_an.php");
$gttim=$_POST["gttim"];
//echo $gttim;
//xu li du lieu
$m_mon_an=new M_mon_an();
$mon_ans=$m_mon_an->tim_kiem($gttim);


?>

<div class="main">
 <div class="container" >
    <h3 class="p1-thucdon" style="width:400px">Danh Sách Món Ăn Tìm Kiếm</h3>
    <div class="khung_mon_an">
    	<div style="margin:auto;width:80%;">
        <?php
        foreach($mon_ans as $rows)
		{
		?>
    		<!--item-->
            
          <div class="ds_mon_an" style="margin:9px">
            <figure><a href="img/<?php echo $rows->hinh?>" class="hinh-mon_an"><img src="img/<?php echo $rows->hinh?>" alt="" ></a></figure>
            <h5><a href="chi_tiet_mon_an.php?ma_mon=<?php echo $rows->ma_mon?>"><?php echo $rows->ten_mon?></a></h5>
            <p class="p1 hide"><?php echo $rows->noi_dung_tom_tat ?></p>
            <p class="p2"><strong class="color-2">don gia:<?php echo number_format($rows->don_gia)?> đ -sl <input type="text" value="1" size="2"/></strong></p>
            <a class="button-1" href="#">mua</a> </div>
            <!--end item-->
        <?php
		}
		?>
        <div style="clear:both"></div>
        </div>
       
           
            
   	</div>
    <div style="clear:both"></div>
   
   
 </div>
</div>