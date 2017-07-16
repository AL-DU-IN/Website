<?php
class Find
{
	private $destination;
	private $source;
	private $journey_date;
	function __construct()
	{
		if(isset($_POST['des'])&&isset($_POST['source'])&&isset($_POST['datess']))
		{
			$this->destination=$_POST['des'];
			$this->source=$_POST['source'];
			$this->journey_date=$_POST['datess'];
		}
	}
	private function filter_out_tags()
	{
		$this->destination=strip_tags($this->destination, $allowable_tags = null);
		$this->source=strip_tags($this->source, $allowable_tags = null);
		$this->journey_date=strip_tags($this->journey_date, $allowable_tags = null);
	}
	private function filter_out_slashes()
	{
		$this->destination=stripslashes($this->destination);
		$this->source=stripslashes($this->source);
		$this->journey_date=stripslashes($this->journey_date);
	}
	private function search_the_database()
	{
		$link=@mysql_connect("localhost","root","");
		if($link)
		{
		mysql_select_db("prototype");
		$a="'".strtolower($this->destination)."'";
		$b="'".strtolower($this->source)."'";
		$m="'".$this->journey_date."'";
		$query="SELECT name,number FROM travelinfo WHERE destination=$a and source=$b and date=$m ;";
		$result=mysql_query($query, $link_identifier = $link);
		if(mysql_num_rows($result)>0)
		{
			$row=mysql_fetch_assoc($result);
			while($row)
			{
				echo $row["name"];
				echo "\t";
				echo $row["number"];
				echo "</br>";
				$row=mysql_fetch_assoc($result);
			}
		}
		else 
		{
			echo "No such traveler found.<a href='Lists.php'>Add your own journey </a>";
		}
		}
	else
	{
		echo "Failed to connect to the database";
	}
}
	public function test()
	{
		$this->search_the_database();
	}
}
$x=new Find;
$x->test();
?>