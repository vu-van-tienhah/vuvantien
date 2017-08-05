<script type="text/javascript" src="layout/js/thu_vien_ajax.js"></script>
<script type="text/javascript" src="layout/js/bootstrap.min.js"></script>
<script type="text/javascript" src="layout/js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="layout/js/bootstrap.min.css"/>
<div class="main" style="margin:0 auto;border:1px solid #999">
	<div>
		<table align="center" width="100%" border="1" cellpadding="15" bgcolor="#CCCCCC" cellspacing="5">
        	<tr>
            <td align="center">XEM MON AN THEO MUA</td>
            </tr>
            <tr>
            <td align="center" style="padding:10px;">
            	<input type="radio" name="mua" id="xuan" value="xuan"/><label style="cursor:pointer" for="mua">mùa xuân</label>
                <input type="radio" name="mua" id="ha" value="ha"/><label style="cursor:pointer" for="mua">mùa hạ</label>
                <input type="radio" name="mua" id="thu" value="thu"/><label style="cursor:pointer" for="mua">mùa thu</label>
            	<input type="radio" name="mua" id="dong" value="dong"/><label style="cursor:pointer" for="mua">mùa đông</label>
            </td>
            </tr>
            <tr>
            	<td align="center"><input class="button-2" value="hiển thị" onclick="xem_mon_an_theo_mua()" type="button" name="xem" /></td>
            </tr>
           
        
        </table> 
        <div id="hienthi">
        	
  			
		</div>
        
         
    </div>
</div>