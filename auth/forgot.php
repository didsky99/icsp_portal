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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sahabat Pergerakan">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#FF4F01">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <title>Lupa Kata Sandi| PKN Mobile</title>
    <!-- Fonts -->
    <link rel="preconnect" href="<?= $base_url?>assets/https://fonts.gstatic.com/">
    <link href="<?= $base_url?>assets/https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
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
    <!-- Web App Manifest -->
    <link rel="manifest" href="<?= $base_url?>assets/manifest.json">
  </head>
  <body>
    <!-- Preloader -->
    <div id="preloader">
      <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
    </div>
    <!-- Internet Connection Status -->
    <!-- # This code for showing internet connection status -->
    <div class="internet-connection-status" id="internetStatus"></div>

    <!-- Login Wrapper Area -->
    <div class="login-wrapper d-flex align-items-center justify-content-center">
      <div class="custom-container">
        <div class="text-center px-4"><img class="login-intro-img" src="<?= $base_url?>assets/img/bg-img/logo.svg" alt=""></div>
        <!-- Register Form -->
        <div class="register-form mt-4">
          <h6 class="mb-3 text-center">Partai Kebangkitan Nusantara</h6>
          <form action="" method="POST">
            <div class="form-group">
              <input class="form-control" type="number" name="wa" placeholder="Masukkan No Whatsapp terdaftar" autocomplete="OFF" autofocus required>
            </div>
            <button class="btn btn-primary w-100" type="submit" name="forgot">Lupa Kata Sandi</button>
          </form>
        </div>
        <!-- Login Meta -->
        <div class="login-meta-data text-center"><a class="stretched-link forgot-password d-block mt-3 mb-1" href="<?= $base_url?>auth/login">Login disini?</a>
          <p class="mb-0">Belum punya akun? <a class="stretched-link" href="<?= $base_url?>auth/register">Daftar sekarang</a></p>
        </div>
      </div>
    </div>
    <!-- All JavaScript Files -->
    <script src="<?= $base_url?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $base_url?>assets/js/slideToggle.min.js"></script>
    <script src="<?= $base_url?>assets/js/internet-status.js"></script>
    <script src="<?= $base_url?>assets/js/tiny-slider.js"></script>
    <script src="<?= $base_url?>assets/js/baguetteBox.min.js"></script>
    <script src="<?= $base_url?>assets/js/countdown.js"></script>
    <script src="<?= $base_url?>assets/js/rangeslider.min.js"></script>
    <script src="<?= $base_url?>assets/js/vanilla-dataTables.min.js"></script>
    <script src="<?= $base_url?>assets/js/index.js"></script>
    <script src="<?= $base_url?>assets/js/magic-grid.min.js"></script>
    <script src="<?= $base_url?>assets/js/dark-rtl.js"></script>
    <script src="<?= $base_url?>assets/js/active.js"></script>
    <!-- PWA -->
    <script src="<?= $base_url?>assets/js/pwa.js"></script>
	<?php
include_once "../controller/function/function_all.php";
include_once "../controller/function/Encrypt.php";
if(isset($_POST['forgot']))
	{
		$wa   	= mysqli_real_escape_string($dbConn,strtolower($_POST['wa']));
								
		$sql = mysqli_query($dbConn,"SELECT kader.kaderID, kader.nama_lengkap,kader.email,  kader.no_whatsapp, kader.no_whatsapp, kader_login.username 
									FROM kader LEFT JOIN kader_login ON kader_login.kaderID = kader.kaderID 
									where kader.no_whatsapp='".$wa."'");
		$cekuser=mysqli_fetch_assoc($sql);
		if(mysqli_num_rows($sql)>0)
			{
		$otp = acak($permitted_number, 6);
		$request_token = enkripsi($cekuser['no_whatsapp'].date('Ymd'));
		$nama = $cekuser['nama_lengkap'];
		$email = $cekuser['email'];
		$whatsapp   = $cekuser['no_whatsapp'];
		$update_token = mysqli_query($dbConn,"UPDATE kader_login SET otp='".$otp."', key_register='".$request_token."' WHERE kader_login.email='".$cekuser['email']."'");
		
			if($update_token)
			{
				
			require '../lib/phpmailer/PHPMailerAutoload.php';
			include "../lib/class/mail_reset_password.php";
			$sql = mysqli_query($dbConn,"SELECT config_whatsapp,config_api_whatsapp  FROM config_site WHERE idconfig='0'");
			$baris=mysqli_fetch_array($sql);
			
			$apikey = $baris['config_api_whatsapp'];
            $sender = $baris['config_whatsapp'];
         
			$pesan2 = "Halo Bapak/Ibu *$nama*,
Kode OTP *$otp*. Harap jangan memberitahukan kepada siapapun";
           
			
			include "../api/teswa.php";
								
				echo notification("Success!","OTP terkirim , silahkan periksa kotak masuk Email dan Whatsapp ","success","test.php");
				echo "<script>setTimeout(function(){window.location = '".$base_url."auth/resetpassword/$request_token' },2000);</script>";
				}else {
				echo notification("Warning!","gagal ","warning","home");
			}
			
		
    } else {
        echo notification("Warning!","No Handphone tidak terdaftar ","warning","home");
    }
	}
?>    
  </body>
</html>