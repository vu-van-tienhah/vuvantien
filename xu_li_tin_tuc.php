<?php
include("moduls/m_tin_tuc.php");
$m_tin_tuc=new M_tin_tuc();
$ma_tin_tuc=$_POST["ma_tin_tuc"];
//echo $ma_tin_tuc;
$tin_tucs=$m_tin_tuc->doc_tin_tuc_theo_ma_tin_tuc($ma_tin_tuc);
?>
<h3 class="p1-thucdon"><?php echo $tin_tucs->tieu_de?></h3>
  	<div class="wrapper img-indent-bot">
    <figure class="img-indent"><img src="img/hinh_tin_tuc/<?php echo $tin_tucs->hinh?>" alt="" width="210" height="125" ></figure>
    <h5><?php echo $tin_tucs->tom_tat?></h5>
	<p><?php echo $tin_tucs->chi_tiet?></p><p><?php echo $tin_tucs->tac_gia?></p> 
    </div>