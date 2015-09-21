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
			$build = '
				<div class="container">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#menu1">Voorgerecht</a></li>
						<li><a data-toggle="tab" href="#menu2">Hoofdgerecht</a></li>
						<li><a data-toggle="tab" href="#menu3">Nagerecht</a></li>
						<li><a data-toggle="tab" href="#menu4">Dranken</a></li>
					</ul>
				<div class="tab-content">';
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
		
		public function getMenusCount()
		{
			$sql = "SELECT COUNT(*) FROM menus";
			foreach($this->dbh->query($sql) as $result);
			return $result[0];
		}
		
	}
?>