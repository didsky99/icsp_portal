<?php
if (!isset($_SESSION)) {
    session_start();
}

$databaseHost = 'localhost';
$databaseName = 'landing';
$databaseUsername = 'root';
$databasePassword = '';

$dbConn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$base_url = "http://localhost/landing/";
//$base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';
$ipcomputer = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (preg_match('/linux/i', $user_agent)) {
    $operation_system = 'Android';
} elseif (preg_match('/macintosh|mac os x/i', $user_agent)) {
    $operation_system = 'Mac';
} elseif (preg_match('/windows|win32/i', $user_agent)) {
    $operation_system = 'Windows';
}
if (preg_match('/MSIE/i', $user_agent) && !preg_match('/Opera/i', $user_agent)) {
    $browser = 'Internet Explorer';
} elseif (preg_match('/Firefox/i', $user_agent)) {
    $browser = 'Mozilla Firefox';
} elseif (preg_match('/Chrome/i', $user_agent)) {
    $browser = 'Google Chrome';
} elseif (preg_match('/Safari/i', $user_agent)) {
    $browser = 'Apple Safari';
} elseif (preg_match('/Opera/i', $user_agent)) {
    $browser = 'Opera';
} elseif (preg_match('/Netscape/i', $user_agent)) {
    $browser = 'Netscape';
}
