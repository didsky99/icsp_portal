<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if (isset($_SESSION['pkn_mobile_app']))
    {
		echo '<script language="javascript">document.location="home";</script>';
	}
include_once "../config/DbConnection.php";
include_once "../config/inc_config.php";
include_once "../controller/function/function_all.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Partai Kebangkitan Nusantara">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#fd0d0d">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>PARTAI KEBANGKITAN NUSANTARA | Pendaftaran Anggota</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="<?= $base_url?>assets/img/core-img/favicon.svg">
    <link rel="apple-touch-icon" href="<?= $base_url?>assets/img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $base_url?>assets/img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="<?= $base_url?>assets/img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $base_url?>assets/img/icons/icon-180x180.png">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= $base_url?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $base_url?>assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= $base_url?>assets/css/tiny-slider.css">
    <link rel="stylesheet" href="<?= $base_url?>assets/css/baguetteBox.min.css">
    <link rel="stylesheet" href="<?= $base_url?>assets/css/rangeslider.css">
    <link rel="stylesheet" href="<?= $base_url?>assets/css/vanilla-dataTables.min.css">
    <link rel="stylesheet" href="<?= $base_url?>assets/css/apexcharts.css">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?= $base_url?>assets/css/style.css">
	<script src="<?php echo $base_url?>assets/js/sweetalert2.all.min.js"></script>
    <link rel="manifest" href="<?= $base_url?>assets/manifest.json">
  </head>
  <body>
    <div id="preloader">
      <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
    </div>
    <div class="internet-connection-status" id="internetStatus"></div>
    <div class="login-back-button"><a href="<?= $base_url?>auth/login">
        <svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
        </svg></a></div>
    <div class="login-wrapper d-flex align-items-center justify-content-center">
      <div class="custom-container">
        <div class="text-center px-4"><img class="login-intro-img" src="<?= $base_url?>assets/img/bg-img/register.svg" alt=""></div>
        <div class="register-form mt-4">
          <h6 class="mb-3 text-center">Silahkan daftar</h6>
          <form action="" method="POST">
		    <div class="form-group text-start mb-3">
              <input class="form-control" type="text" name="ktp" placeholder="Masukan 16 digit No KTP" onkeypress="return event.charCode >= 48 && event.charCode <=57" autocomplete autofocus required>
            </div>
            <div class="form-group text-start mb-3">
              <input class="form-control" type="text" name="nama" placeholder="Masukkan nama anda" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
            </div>
			<div class="form-group text-start mb-3">
              <input class="form-control" type="email" name="email" placeholder="Masukkan email anda" required>
            </div>
            <div class="form-group text-start mb-3">
              <input class="form-control" type="text" name="whatsapp" placeholder="Masukkan nomor whatsapp" onkeypress="return event.charCode >= 48 && event.charCode <=57" required>
            </div>
            <div class="form-group text-start mb-3 position-relative">
              <input class="form-control" id="psw-input" type="password" name="password" placeholder="Masukkan kata sandi" required>
              <div class="position-absolute" id="password-visibility"><i class="bi bi-eye"></i><i class="bi bi-eye-slash"></i></div>
            </div>
            <div class="mb-3" id="pswmeter"></div>
          
            <button class="btn btn-danger w-100" type="submit" name="reg">Daftar</button>
          </form>
        </div>
        <div class="login-meta-data text-center">
          <p class="mt-3 mb-0">Sudah punya akun? <a class="stretched-link" href="<?= $base_url?>auth/login">Login disini</a></p>
        </div>
      </div>
    <script src="<?= $base_url?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $base_url?>assets/js/internet-status.js"></script>
    <script src="<?= $base_url?>assets/js/dark-rtl.js"></script>
    <script src="<?= $base_url?>assets/js/pswmeter.js"></script>
    <script src="<?= $base_url?>assets/js/active.js"></script>
    <script src="<?= $base_url?>assets/js/pwa.js"></script>
  </body>
  <?php
include_once "../controller/function/Encrypt.php";

if(isset($_POST['reg']))
{
	
		
		$nama_lengkap		= mysqli_real_escape_string($dbConn,$_POST['nama']); 
		$ktp				= mysqli_real_escape_string($dbConn,$_POST['ktp']); 
		$email				= mysqli_real_escape_string($dbConn,$_POST['email']); 
		$whatsapp			= mysqli_real_escape_string($dbConn,$_POST['whatsapp']); 
		$password			= mysqli_real_escape_string($dbConn,$_POST['password']);
		$temp_user  		= str_replace(' ', '', $nama_lengkap);
		$user 				= substr($temp_user,0,8);
		$username 			= strtolower($user.rand(10, 99));
		$kaderID 			= date('Ymdhis').rand(10000000, 99999999);
						
		
		$registeredDate = date('Y-m-d H:i:s') ;
	if(!isset($password))
	{
		echo notification('Warning!','diperlukan kata sandi','warning','home');
	}
	else{	
			$cek_status=mysqli_query($dbConn,"SELECT kader.no_ktp,
																	 kader_login.kaderID,
																	 kader_login.email,
																	 no_whatsapp 
															  FROM kader_login 
															  LEFT JOIN kader ON kader.kaderID = kader_login.kaderID 
															  WHERE no_ktp ='$ktp' or no_whatsapp='$whatsapp' or kader_login.email='$email'");
			if (mysqli_num_rows($cek_status)> 0)
			{
				$cekmember=mysqli_fetch_assoc($cek_status);
				if($cekmember['no_ktp']==$ktp)
				{
					echo notification("Warning!","Gagal ! Nik sudah terdaftar","warning","home");
				}
				else if($cekmember['no_whatsapp']==$whatsapp)
				{
					echo notification("Warning!","Gagal ! No. Handphone sudah terdaftar","warning","home");
				}
				else
				{
					echo notification("Warning!","Gagal ! Email sudah terdaftar","warning","home");
				}
			 	
			}
			else
			{

				$generate_pass = hash_password($password);
				$key_register  = enkripsi($email);
				$otp  		   = rand(100000, 999999);
			
				  $savememberlogin = mysqli_query($dbConn, "INSERT INTO kader_login(kaderID,username,email,password,key_register,otp)
																			 VALUES('$kaderID', '$username','$email','$generate_pass','$key_register','$otp')");
				if($savememberlogin)
					{
						$status_aktif='1';
						$savemember = mysqli_query($dbConn,"INSERT INTO kader(kaderID,
																			  no_ktp,
																			  nama_lengkap,
																			  email,
																			  no_whatsapp,
																			  status_aktif,
																			  tgl_verifikasi,
																			  waktu_pendaftaran) 
																	  VALUES ('$kaderID',
																			  '$ktp',
																			  '$nama_lengkap',
																			  '$email',
																			  '$whatsapp',
																			  '$status_aktif',
																			  '0000-00-00 00:00:00',
																			  '$registeredDate')");	
																				 
						if($savemember)
							{
								
								$link_verification = $base_url."auth/verification/".$key_register;
								
								require '../lib/phpmailer/PHPMailerAutoload.php';
								include "../lib/class/mail_reg.php";
								$sql = mysqli_query($dbConn,"SELECT config_whatsapp,config_api_whatsapp  FROM config_site WHERE idconfig='0'");
			$baris=mysqli_fetch_array($sql);
			
			$apikey = $baris['config_api_whatsapp'];
            $sender = $baris['config_whatsapp'];
 
								//$pesan2 = "Kode OTP *$otp*. Harap jangan memberitahukan kepada siapapun";
                                //$nomor = $whatsapp;
								//include "../api/teswa.php";
	
							
								echo notification("Success!","Selamat, Anda berhasil terdaftar","success","test.php");	
								echo "<script>setTimeout(function(){window.location = '".$base_url."auth/verification/".$key_register."'},1500);</script>";							
							}
						else
							{
								echo notification("Warning!","Gagal!","warning","home");
							}																					
					}
				else
					{
						echo notification("Warning!","Gagal","warning","home");
					}
			}			
		}
	}
?>
</html>