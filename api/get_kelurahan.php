<?php
include('../config/config.php');
$id_kec = $_GET['id_kec'];
$sql = "SELECT id_kel,nama FROM kelurahan WHERE `id_kec` = '$id_kec'";
$query = $mysqli->query($sql);
$data = array();
while($row = $query->fetch_array(MYSQLI_ASSOC)){
$data[] = array("id_kel" => $row['id_kel'], "nama" => $row['nama']);
}
echo json_encode($data);?>