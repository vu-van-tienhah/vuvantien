<?php
error_reporting(E_WARNING);
$mua=$_GET["mua"];

$path="img/hinh_mon_theo_mua/mon_an_theo_mua.txt";
$f=fopen($path,"r") or die("loi mo tap tin !");;
//duyet tap tin
$noidung=array();
while(!feof($f))
{
	$noidung[]=fgets($f);
		
}
//dog tap tin
fclose($f);

//hien thi
?>

<h2>Danh Dách Món Ăm Theo Mùa</h2>
  			<p style="color:#F00;font-style:italic" align="center">Danh sách món ăn theo mùa <?php echo $mua; ?></p>
  	<table class="table table-hover">
    <thead>
      		<tr>
       			 <th>Tên món</th>
        		 <th>Mô tả</th>
       			 <th>hình</th>
                 <th>Đơn giá</th>
      		</tr>
    </thead>
   <?php
   foreach($noidung as $nd)
   {
	   $row=explode("|",$nd);
	   if(trim($mua)==trim($row[5]))
	   {
   ?>
    <tbody>
      		<tr>
        		<td><?php echo $row[1]?></td>
        		<td><?php echo $row[3]?></td>
        		<td><img src="img/hinh_mon_theo_mua/<?php echo $mua; ?>/<?php echo $row[4]?>" width="200px" height="100px"/></td>
				<td><?php echo number_format($row[2])?> đ</td>

      		</tr>
      		
           
            
   	</tbody>
    <?php
	   }
   }
	?>
  	</table>