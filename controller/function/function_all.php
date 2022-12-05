<?php date_default_timezone_set("Asia/Jakarta");
function notification($title, $text, $type, $location)
	{
        return "<script language=\"javascript\">
                    swal({
                        title: \"{$title}\",
                        text: \"{$text}\",
                        type: \"{$type}\"
                    }, function(){
                            window.location.href = \"{$location}\";
                    });
                </script>";
	}
function hash_password($pa55word)
								{
									$salt ='50m3th1nk3rr0r';
									$hash = hash('sha512',$salt.$pa55word);
									return $hash;
								}

function rupiah($angka){
	$hasil_rupiah = "Rp. " . number_format($angka,0,',','.');
	return $hasil_rupiah;
 
}
function rp($angkarp){
	$hasil_rp = number_format($angkarp,0,',','.');
	return $hasil_rp;
 
}
$permitted_chars = '0123456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ';
$permitted_number = '0123456789';
function acak($input, $strength = 16) {
			$input_length = strlen($input);
			$random_string = '';
			for($i = 0; $i < $strength; $i++) {
				$random_character = $input[mt_rand(0, $input_length - 1)];
				$random_string .= $random_character;
			}
		 
			return $random_string;
		}
function penyebut($nilai) {
		$nilai = abs($nilai);
		$huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
		$temp = "";
		if ($nilai < 12) {
			$temp = " ". $huruf[$nilai];
		} else if ($nilai <20) {
			$temp = penyebut($nilai - 10). " Belas";
		} else if ($nilai < 100) {
			$temp = penyebut($nilai/10)." Puluh". penyebut($nilai % 10);
		} else if ($nilai < 200) {
			$temp = " seratus" . penyebut($nilai - 100);
		} else if ($nilai < 1000) {
			$temp = penyebut($nilai/100) . " Ratus" . penyebut($nilai % 100);
		} else if ($nilai < 2000) {
			$temp = " Seribu" . penyebut($nilai - 1000);
		} else if ($nilai < 1000000) {
			$temp = penyebut($nilai/1000) . " Ribu" . penyebut($nilai % 1000);
		} else if ($nilai < 1000000000) {
			$temp = penyebut($nilai/1000000) . " Juta" . penyebut($nilai % 1000000);
		} else if ($nilai < 1000000000000) {
			$temp = penyebut($nilai/1000000000) . " Milyar" . penyebut(fmod($nilai,1000000000));
		} else if ($nilai < 1000000000000000) {
			$temp = penyebut($nilai/1000000000000) . " Trilyun" . penyebut(fmod($nilai,1000000000000));
		}     
		return $temp;
	}
 
	function terbilang($nilai) {
		if($nilai<0) {
			$hasil = "minus ". trim(penyebut($nilai));
		} else {
			$hasil = trim(penyebut($nilai));
		}     		
		return $hasil;
	}
	function convert_number($no){
        if(!preg_match('/[^+0-9]/',trim($no))){
            // cek apakah no hp karakter 1-3 adalah +62
            if(substr(trim($no), 0, 3)=='+62'){
                $hp = trim($no);
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif(substr(trim($no), 0, 1)=='0'){
                $hp = '+62'.substr(trim($no), 1);
            }else{
                $hp = '00000';
            }
        }
        return $hp;
    }
	
	

?>