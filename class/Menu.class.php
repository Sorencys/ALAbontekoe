<?php
	class Menu
	{
		public $dbh;		// dbh = database pdo, menu
		
		public function __construct($hst, $usr, $pwd)
		{
			$this->dbh = new PDO("mysql:host=$hst;dbname=bontekoe", "$usr", "$pwd");
		}
		
		public function returnAllMenu()
		{
			$count = $this->getMenusCount();
			$sql = "SELECT * FROM `menus` GROUP BY id";
			$build = "<div>";
			foreach($this->dbh->query($sql) as $row)
			{
				$build .= "<div id=" . $row['id'] . "><h2>" . $row['name'] . "</h2>";
				$build .= $this->returnMenu($row['id']);
				$build .= "</div>";
			}
			$build .= "</div>";
			return $build;
		}
		
		public function returnMenu($menu)
		{
			$sql = "SELECT * FROM `menu` WHERE `index`=$menu";
			$build = "<table><tbody>";
			foreach($this->dbh->query($sql) as $row)
			{
				$build .= "<tr><td>" . $row['name'] . "</td><td>" . $row['description'] . "</td><td>€" . $row['price'] . "</td></tr>";
			}
			$build .= "</tbody></table>";
			return $build;
		}
		
		public function getMenusCount()
		{
			$sql = "SELECT COUNT(*) FROM menus";
			foreach($this->dbh->query($sql) as $result);
			return $result[0];
		}
		
	}
?>