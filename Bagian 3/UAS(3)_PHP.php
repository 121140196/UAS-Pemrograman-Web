<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'uas_pemrograman_web'); 

$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>
