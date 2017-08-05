<?php
class database
{
	private $_dhb='';
	private $_sql='';
	private $_cursor=NULL;
	public function __construct()
	{
		try{
			$this->_dhb=new PDO("mysql:host=localhost;dbname=do_an_tot_nghiep","root","");
			$this->_dhb->query("set names utf8");
			}
		catch(PDOException $ex)
		{
			die($ex->getMessage());
		}
	}
	//ket noi,truy van sql
	public function SetQuery($sql)
	{
		$this->_sql=$sql;
	}
	//thuc thi
	public function execute($posi=array())
	{
		$this->_cursor=$this->_dhb->prepare($this->_sql);
		if($posi)
		{
			for($i=0;$i<count($posi);$i++)
			{
				$this->_cursor->bindParam($i+1,$posi[$i]);
			}
		}	
		$this->_cursor->execute();
		return $this->_cursor;
	}
	//loadallrows
	public function LoadAllrows($posi=array())
	{
		if(!$posi)
		{
			if(!$result=$this->execute())
			return false;
		}
		else
		{
			if(!$result=$this->execute($posi))
			return false;
		}
		return $result->fetchAll(PDO::FETCH_OBJ);
	}
	//LoadRow
	public function LoadRow($posi=array())
	{
		if(!$posi)
		{
			if(!$result=$this->execute())
			return false;
		}
		else
		{
			if(!$result=$this->execute($posi))
			return false;
		}
		return $result->fetch(PDO::FETCH_OBJ);	
	}
	//    //Function count the record on the table
	public function LoadRecord($posi=array())
	{
		if(!$posi)
		{
			if(!$result=$this->execute())
			return false;
		}
		else
		{
			if(!$result=$this->execute($posi))
			return false;
		}
		return $result->fetch(PDO::FETCH_COLUMN); 
	} 
	 public function getLastId() {
        return $this->_dbh->lastInsertId();
    }
    
    public function disconnect() {
        $this->_dbh = NULL;
    }
	
}


?>