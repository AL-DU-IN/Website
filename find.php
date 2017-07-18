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
		$this->filter_out_slashes();
		$this->filter_out_tags();
		$a="'".strtolower($this->destination)."'";
		$b="'".strtolower($this->source)."'";
		$m="'".$this->journey_date."'";
		$query="SELECT DISTINCT name,number,date FROM travelinfo WHERE destination=$a and source=$b and date=$m ;";
		$result=mysql_query($query, $link_identifier = $link);
		if(mysql_num_rows($result)>0)
		{
			$row=mysql_fetch_assoc($result);
			while($row)
			{
				$a=$row["name"];
				$b=$row["number"];
				$c=$row["date"];
				echo
				"
				<html>
				<head>
				<title>Result</title>
				<link rel='stylesheet' type='text/css' href='findStyle.css'>
				</head>
				<body>
				<button class='x1'>$a</button>
				</hr>
				<button class='x2'>$b</button>
				</hr>
				<button class='x3'>$c</button>
				</br>
				</body>
				</htmL>
				";
				$row=mysql_fetch_assoc($result);
			}
		}
		else 
		{
			echo "
			<html>
			<head>
			<title>Oops!!</title>
			<link rel='stylesheet' type='text/css' href='findStyle.css'>
			</head>
			<body>
			<button class='x1'>Looks like you have to travel alone</button>
			<button class='x1'>Add your journey on the home page</button>
			</body>
			";
		}
		}
	else
	{
		echo "<h1>Failed to connect !!!!!!!</h1>";
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