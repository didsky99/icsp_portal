<?php
include_once "config/DbConnection.php";
include_once "config/inc_config.php";

$getmenu = mysqli_query($dbConn, "SELECT * from m_webservice where isActive = '1'");

$width = 25;
$length = mysqli_num_rows($getmenu);
if ($length == 1) {
    $val = 'col-lg-10';
    $div = "<div class='col-lg-1'></div>";
} elseif ($length == 2) {
    $val = 'col-lg-5';
    $div = "<div class='col-lg-1'></div>";
} elseif ($length == 3) {
    $val = 'col-lg-4';
    $div = "";
} else if ($length == 4) {
    $width = 30;
    $val = 'col-lg-3';
    $div = "";
} else {
    $width = 40;
    $val = 'col-lg-2';
    $div = "<div class='col-lg-1'></div>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ICSP Portal</title>
    <meta name="description" content="ICSP Web Application Portal">
    <link rel="icon" href="<?= $base_url ?>/assets/images/icsp.png">
    <link rel="apple-touch-icon" href="<?= $base_url ?>assets/img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $base_url ?>assets/img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="<?= $base_url ?>assets/img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $base_url ?>assets/img/icons/icon-180x180.png">
    <link rel="stylesheet" href="<?= $base_url ?>node_modules/material-icons/css/material-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <!-- <script src="https://www.google.com/recaptcha/api.js?render=6LdpMT0iAAAAAMRe8-tE5YXt1VA86uxorwjOJVxL"></script> -->

    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <meta name="theme-color" content="#fd0d0d">
    <link rel="stylesheet" href="front_template/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="front_template/assets/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
    <link href="front_template/assets/css/form.css" rel="stylesheet">
    <script src="<?= $base_url ?>assets/js/jquery/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $base_url ?>assets/js/sweetalert2.all.min.js"></script>
    <script>
        document.onkeypress = function(event) {
            event = (event || window.event);
            if (event.keyCode == 123) {
                return false;
            }
        }

        document.onmousedown = function(event) {
            event = (event || window.event);
            if (event.keyCode == 123) {
                return false;
            }
        }
        document.onkeydown = function(event) {
            event = (event || window.event);
            if (event.keyCode == 123) {
                return false;
            }
        }
        document.onkeydown = function(e) {
            if (e.ctrlKey && e.keyCode === 85) {
                return false;
            }
        };
    </script>
    <link rel="stylesheet" href="styles.css">
</head>

<body class="container-fluid bg-main">
    <div class="row" style="height: 20vh !important;"></div>
    <div class="row" style="height: 65vh !important;">
        <div class="row justify-content-center" style="width: <?php echo $width ?>%! important ; margin: auto;">
            <div class="row ">
                <img class="img-logo" src="<?php echo $base_url . "assets/images/icsp.png" ?>">
            </div>
            <div class="col-lg-12 text-center my-4">
                <h1 class="text-white text-banner font-kanit">
                    ICSP IT Solutions
                </h1>
            </div>
            <?php

            $count = 0;
            while ($baris = mysqli_fetch_assoc($getmenu)) {
                if ($count == 0) {
                    echo $div;
                }
                $count++;
            ?>
                <div class="<?= $val ?> d-flex justify-content-center">
                    <a class="btn-gradient btn-2 btn-circle btn-xl text-wrap d-flex align-items-center" href="<?= $baris['url'] ?>"><span class="text-white font-kanit"><?= $baris['webservice'] ?></span></a>
                </div>

                <?php
                if ($count == 5 || $count == $length) {
                    echo $div;
                ?>
                    <br>
            <?php
                    $count = 0;
                }
            } ?>
        </div>
    </div>

    <div class="row d-flex align-items-center" style="height: 15vh !important;">
        <footer class="footer">
            <div class="text-white float-left ml-5">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>, made by
                <a href="#" target="_blank">ICSP</a>
            </div>
        </footer>
    </div>

    <!-- <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LdpMT0iAAAAAMRe8-tE5YXt1VA86uxorwjOJVxL', {
                action: 'homepage'
            }).then(function(token) {
                // console.log(token);
                document.getElementById("token").value = token;
            });
            // refresh token every minute to prevent expiration
            setInterval(function() {
                grecaptcha.execute('6LdpMT0iAAAAAMRe8-tE5YXt1VA86uxorwjOJVxL', {
                    action: 'homepage'
                }).then(function(token) {
                    console.log('refreshed token:', token);
                    document.getElementById("token").value = token;
                });
            }, 60000);
        });
    </script> -->
</body>
<?php
include "controller/function/dropdown_location.php";
include_once "controller/function/Decrypt.php";
include_once "controller/function/Encrypt.php";
include_once "controller/function/function_all.php";
?>


</html>