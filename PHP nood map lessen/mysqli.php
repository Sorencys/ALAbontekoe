<?php
$mysqli = mysqli_connect("localhost", "root", "usbw", "");
if(msqli_connect_errno($mysqli)) {
    echo "Failed" , mysqli_connect_errno();
}
?>