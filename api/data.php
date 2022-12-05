<?php 
  header("Content-Type: application/json; charset=UTF-8");
// define('HOST','localhost');
// define('USER','dba-pkm-999');
// define('PASS','fEz37PKN');
// define('DB1', 'nusaid');

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB1', 'cms_pkn');

// Buat Koneksinya
$db1 = new mysqli(HOST, USER, PASS, DB1);
  
  if(isset($_GET["query"])){
    $key = "%".$_GET["query"]."%";
    $query = "SELECT * FROM kader WHERE nama_lengkap LIKE ? LIMIT 10";
    $dewan1 = $db1->prepare($query);
    $dewan1->bind_param('s', $key);
    $dewan1->execute();
    $res1 = $dewan1->get_result();

    while ($row = $res1->fetch_assoc()) {
        $output['suggestions'][] = [
            'value' => $row['nama_lengkap']." - ".$row['no_ktp'],
            'nama_lengkap'  => $row['nama_lengkap'],
            'kaderID'  => $row['kaderID']
        ];
    }

    if (! empty($output)) {
        echo json_encode($output);
    }
  }
?>  