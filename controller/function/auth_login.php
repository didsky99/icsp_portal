<?php
	if (isset($_SESSION['pkn_mobile_app']))
    {
		$ses_sql=mysqli_query($dbConn,"SELECT kader.kaderID,
									kader.no_ktp, 
									kader.nama_lengkap,
									kader.jenis_kelamin,
									kader.tempat_lahir,
									kader.tgl_lahir,
									kader.email,
									kader.status_perkawinan,
									kader.agama,
									kader.pendidikan,
									kader.golongan_darah,
									kader.no_whatsapp,
									kader.alamat,rw,rt,
									provinsi.nama as provinsi,
									kabupaten.nama as kota,
									kecamatan.nama as kecamatan,
									kelurahan.nama as kelurahan,
									kader.status_aktif,
                                    kader.provinsi as idprovinsi,
                                    kader.kota as idkota,
                                    kader.kecamatan as idkecamatan,
                                    kader.kelurahan as idkelurahan,
									foto_profil,
									if(foto_ktp!='',foto_ktp,'ktp.jpg') as foto_ktp,
									waktu_pendaftaran,
                                    status_verifikasi
									FROM `kader`
									LEFT JOIN provinsi ON provinsi.id_prov = kader.provinsi
									LEFT JOIN kabupaten ON kabupaten.id_kab = kader.kota
									LEFT JOIN kecamatan ON kecamatan.id_kec = kader.kecamatan
                                    LEFT JOIN kelurahan ON kelurahan.id_kel = kader.kelurahan
								Where kader.email='".$_SESSION['pkn_mobile_app']."'");
		$row = mysqli_fetch_assoc($ses_sql);
		$login_session =$row['nama_lengkap'];
		$userID=$row['kaderID'];
		$membertempatlahir=$row['tempat_lahir'];
		$memberbirthdate=$row['tgl_lahir'];
		$memberstatus=$row['status_aktif'];
		$memberalamat=$row['alamat'];
		$rt=$row['rt'];
		$rw=$row['rw'];
		$memberhp=$row['no_whatsapp'];
		$membersperkawinan=$row['status_perkawinan'];
		$memberagama=$row['agama'];
		$memberpendidikan=$row['pendidikan'];
		$membergoldarah=$row['golongan_darah'];
		$memberjk=$row['jenis_kelamin'];
		$member_avatar=$row['foto_profil'];
		$member_pic_ktp=$row['foto_ktp'];
		$memberktp=$row['no_ktp'];
		$member_provinsi=$row['provinsi'];
		$member_id_provinsi=$row['idprovinsi'];
		$member_kota=$row['kota'];
		$member_id_kota=$row['idkota'];
		$member_kecamatan=$row['kecamatan'];
		$member_id_kecamatan=$row['idkecamatan'];
		$member_kelurahan=$row['kelurahan'];
		$member_id_kelurahan=$row['idkelurahan'];
		$member_status_verifikasi=$row['status_verifikasi'];
		$member_daftar=date('Y-m-d',strtotime($row['waktu_pendaftaran']));
		
		if($row['foto_profil']=='' and $row['jenis_kelamin']=='L'){$foto_profil="man.png";}
		else if($row['foto_profil']=='' and $row['jenis_kelamin']=='P'){$foto_profil="woman.png";}
		else{$foto_profil=$row['foto_profil'];}
	} else {header('Location:'.$base_url.'auth/login');}

?>