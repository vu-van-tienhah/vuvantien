<?php
class Pager
{
	public  function FindStart($limit)
	{
		if((!isset($_GET["page"])) || ($_GET["page"]==1) )
		{
			$star=0;
			$_GET["page"]=1;
		}
		else
		{
			$star=($_GET["page"]-1)*$limit;
		}
		return $star;
	}
	public  function Findpage($count,$limit)
	{
		$pages=(($count%$limit)==0)?$count/$limit:floor($count/$limit)+1;	
		return $pages;
	}
	public   function PageList($curpage,$pages,$param=NULL)
	{
		$page_list="";
		if(($curpage!=1)&&($curpage))
		{
			$page_list.="<a href=\"  ".$_SERVER["PHP_SELF"]."  ?  ".$ma_khoa_hoc." page=1$param\"  title=\" Trang dau\" ><<</a>";
		}
		if(($curpage-1)>0)
		{
			$page_list.="<a href=\"".$_SERVER["PHP_SELF"]."?".$ma_khoa_hoc."page=".($curpage-1)."$param\" title=\"ve trang truoc\"> < </a>";
		}
		$vtdau=max($curpage-2,1);
		$vtcuoi=min($curpage+2,$pages);
			for($i=$vtdau;$i<=$vtcuoi;$i++)
			{
				if($i==$curpage)
				{
					$page_list.='<span class="current">'.$i."</span>";
				}	
				else
				{
					$page_list.="<a href='".$_SERVER["PHP_SELF"]."?".$ma_khoa_hoc."page=".$i."$param' title='Trang ".$i."'>".$i."</a>";
				}
			}
		if(($curpage+1)<=$pages)
		{
			$page_list.="<a href=\"".$_SERVER["PHP_SELF"]."?".$ma_khoa_hoc."page=".($curpage+1)."$param\" title=\"den trang sau\">  > </a>";
			$page_list.="<a href=\"".$_SERVER["PHP_SELF"]."?".$ma_khoa_hoc."page=".$pages."$param\" title=\"den trang cuoi\">>></a>";
		}
		return $page_list;
	}
	
	function nextPrev($curpage,$pages)//chi hien thi 2 nut truoc va sau
	{
		$nextPrev="";
		if(($curpage-1)<=0)
		{
			$nextPrev.="ve trang truoc";	
		}
		else
		{
		$nextPrev.="<a href=\"".$_SERVER["PHP_SELF"]."?page=".($curpage-1)."\">ve trag truoc </a>";	
			
		}
		$nextPrev.=" | ";
		if(($curpage+1)>$pages)
		{
			$nextPrev."den trang sau";
		}
		else
		{
			$nextPrev.="<a href=\"".$_SERVER["PHP_SELF"]."?page=".($curpage+1)."\">den trang sau</a>";	
		}
		return $nextPrev;
	}



}

?>