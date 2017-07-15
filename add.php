<?php
	class Connect
	{
		static private $host="localhost";
		static private $admin="root";
		static private $pass="";
		private $destination;
		private $source;
		private $individual;
		private $phone_number;
		private $journey_date;
		function __construct()
		{
			$this->destination=$_POST['ades'];
			$this->source=$_POST['asource'];
			$this->individual=$_POST['aname'];
			$this->phone_number=$_POST['amobno'];
			$this->journey_date=$_POST['dates'];
		}
		private function add_to_database()
		{
			$link=@mysql_connect("localhost","root","") or die("Unable to connect");
			$cursor=@mysql_select_db("prototype");
			$this->filter_out_tags();
			$this->filter_out_slashes();
			$a="'".$this->destination."'";
			$b="'".$this->source."'";
			$c="'".$this->individual."'";
			$d="'".$this->phone_number."'";
			$m="'".$this->journey_date."'";
			$querys="INSERT INTO travelinfo (destination,source,name,number,date) VALUES ($a,$b,$c,$d,$m);";
			@mysql_query("$querys");
			@mysql_close($link_identifier = $link);
		}
		private function filter_out_tags()
		{
			$this->destination=strip_tags($this->destination, $allowable_tags = null);
			$this->source=strip_tags($this->source, $allowable_tags = null);
			$this->individual=strip_tags($this->individual, $allowable_tags = null);
			$this->phone_number=strip_tags($this->phone_number, $allowable_tags = null);
			$this->journey_date=strip_tags($this->journey_date, $allowable_tags = null);
		}
		private function filter_out_slashes()
		{
			$this->destination=stripslashes($this->destination);
			$this->source=stripslashes($this->source);
			$this->individual=stripslashes($this->individual);
			$this->phone_number=stripslashes($this->phone_number);
			$this->journey_date=stripslashes($this->journey_date);
		}
		public function test()
		{
			$this->add_to_database();
		}
	}
	$x=new Connect;
	$x->test();
?>
