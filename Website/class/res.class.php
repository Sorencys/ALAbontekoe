<?php
	class Res
	{
		public $dbh;
		
		public function __construct($hst, $usr, $pwd)
		{
			try {
			$this->dbh = new PDO("mysql:host=$hst;dbname=bontekoe", "$usr", "$pwd");
			$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e)
			{
				echo $sql . "<br>" . $e->getMessage();
			}
		}
		
		public function addReservation($date, $time, $count, $name, $email, $comments)
		{
			$sql = "INSERT INTO `reservations` (datum, time, personcount, name, email, comments) VALUES ('$date', '$time', '$count', '$name', '$email', '$comments')";
			if ($this->dbh->exec($sql) === TRUE)
			try
			{
				$this->dbh->exec($sql);
				echo "New record created successfully";
			}
			catch(PDOException $e)
			{
				echo $sql . "<br>" . $e->getMessage();
			}
		}
	}
?>