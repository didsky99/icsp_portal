<?php date_default_timezone_set("Asia/Jakarta");
 $array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
 $hari_ini = $array_hr[date('N')];  
$date= date('j');
  $array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
  $month = $array_bln[date('n')];
  $month_1= date('m');
  $month_hrf=date('M');
$year = date('Y');
$date=date('Y-m-d'); 
$date_now = date("Y-m-d");
$time_now = date("H:i:s");
$insertdatenow = date("Y-m-d h:is");
function TanggalIndo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
 ?>