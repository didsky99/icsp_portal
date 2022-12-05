<?php
$mysqli = new mysqli('localhost', 'root', 'icsp4indonesia123', 'nusaid'); //sesuaikan dengan konfigurasi database kamu ya
if (mysqli_connect_error()) { 
die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}
?>