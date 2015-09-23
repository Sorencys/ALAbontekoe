<?php
	class Menu
	{
		public $dbh;		// dbh = database pdo, menu
		
		public function __construct($hst, $usr, $pwd)
		{
			$this->dbh = new PDO("mysql:host=$hst;dbname=bontekoe", "$usr", "$pwd");
		}
		
		// returns all menus in a tab format
		public function returnAllMenu()
		{
			$count = $this->getMenusCount();
			$sql = "SELECT * FROM `menus` GROUP BY id";
			
			// create the tabs
			$build = '<div class="container"><ul class="nav nav-tabs">';
			foreach($this->dbh->query($sql) as $row)
			{
				$build .= '<li';
				if($row['id'] == 1) $build .= ' class="active"';
				$build .= '><a data-toggle="tab" href="#menu' . $row['id'] . '">' . $row['name'] . '</a></li>';
			}
			
			// create the content in the tabs
			$build .= '</ul><div class="tab-content">';
			foreach($this->dbh->query($sql) as $row)
			{
				$build .= '<div id="menu' . $row['id'] .'" class="tab-pane fade';
				if($row['id'] == 1) $build .= ' in active ';
				$build .= '"><h3>' . $row['name'] . '</h3>';
				$build .= $this->returnMenu($row['id']);
				$build .= "</div>";
			}
			$build .= "</div></div>";
			return $build;
		}
		
		// returns menu content
		public function returnMenu($menu)
		{
			$sql = "SELECT * FROM `menu` WHERE `index`=$menu";
			$build = "<table class='table'><tbody>";
			foreach($this->dbh->query($sql) as $row)
			{
				$build .= "<tr><td>" . $row['name'] . "</td><td>" . $row['description'] . "</td><td>€" . $row['price'] . "</td></tr>";
			}
			$build .= "</tbody></table>";
			return $build;
		}
		
		// returns menu count from database
		public function getMenusCount()
		{
			$sql = "SELECT COUNT(*) FROM menus";
			foreach($this->dbh->query($sql) as $result);
			return $result[0];
		}
		
    }

?>