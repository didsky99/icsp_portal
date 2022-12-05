<?php
$base_url = "http";
$base_url .= "://" . $_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
$ip_address = $_SERVER['REMOTE_ADDR'];
