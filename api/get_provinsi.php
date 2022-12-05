<?php
include('../config/config.php');$sql = "SELECT id_prov,nama FROM provinsi where active='1'";
$query = $mysqli->query($sql);
$data = array();
while($row = $query->fetch_array(MYSQLI_ASSOC)){
$data[] = array("id_prov" => $row['id_prov'], "nama" => $row['nama']);
}
echo json_encode($data);?>