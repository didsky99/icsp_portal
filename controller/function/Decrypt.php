<?php
function dekripsi($string)
{
    $output = false;
 
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'AZMI';
    $secret_iv = 'AZMI';
 
    // hash
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
 
    $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
 
    return $output;
}
?>