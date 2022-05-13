<?php 
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','db_pegawai');
$conn = new mysqli(HOST,USER,PASS,DB) or die('Connection error to the database');

date_default_timezone_set("ASIA/JAKARTA");