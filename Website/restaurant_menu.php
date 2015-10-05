<?php
	include 'header.php';
	include 'class/Menu.class.php';

	$menu=new Menu('localhost:3307', 'root', 'usbw');
	echo $menu -> returnAllMenu();
	$menu->close();
	
	include 'footer.php';
?>