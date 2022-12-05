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
    $query = "SELECT kelurahan.nama as kelurahan,
															 kelurahan.id_kel,
															 kecamatan.nama as kecamatan, 
															 kecamatan.id_kec,
															 kabupaten.nama as kota, 
															 kabupaten.id_kab,
															 provinsi.nama as provinsi,
															 provinsi.id_prov
                                                             FROM kelurahan
															 LEFT JOIN kecamatan ON kecamatan.id_kec = kelurahan.id_kec
															 LEFT JOIN kabupaten ON kabupaten.id_kab = kecamatan.id_kab
															 LEFT JOIN provinsi ON provinsi.id_prov = kabupaten.id_prov WHERE kelurahan.nama LIKE ? LIMIT 10";
    $dewan1 = $db1->prepare($query);
    $dewan1->bind_param('s', $key);
    $dewan1->execute();
    $res1 = $dewan1->get_result();

    while ($row = $res1->fetch_assoc()) {
		$kota = ucwords(strtolower($row['kota']));
        $output['suggestions'][] = [
            'value' => 'Kel : '.$row['kelurahan'].'- Kec :'.$row['kecamatan'].'- Kota/Kab : '.ucwords(strtolower($row['kota'])),
            'kelurahan'  => $row['kelurahan'],
            'kecamatan'  => $row['kecamatan'],
            'provinsi'  => $row['provinsi'],
            'kota'  => $kota,
            'id_kel'  => $row['id_kel'],
            'id_kab'  => $row['id_kab'],
            'id_kec'  => $row['id_kec'],
            'id_prov'  => $row['id_prov']
        ];
    }

    if (! empty($output)) {
        echo json_encode($output);
    }
  }
?>  