<?php
include('../config/config.php');$id_prov = $_GET['id_prov'];
$sql = "SELECT id_kab,lower(nama) as nama FROM kabupaten WHERE `id_prov` = '$id_prov'";
$query = $mysqli->query($sql);
$data = array();
while($row = $query->fetch_array(MYSQLI_ASSOC)){
$data[] = array("id_kab" => $row['id_kab'], "nama" => ucwords($row['nama']));
}
echo json_encode($data);?>