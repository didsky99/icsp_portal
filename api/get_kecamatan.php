<?php
include('../config/config.php');
$id_kab = $_GET['id_kab'];
$sql = "SELECT id_kec,nama FROM kecamatan WHERE `id_kab` = '$id_kab'";
$query = $mysqli->query($sql);
$data = array();
while($row = $query->fetch_array(MYSQLI_ASSOC)){
$data[] = array("id_kec" => $row['id_kec'], "nama" => $row['nama']);
}
echo json_encode($data);?>