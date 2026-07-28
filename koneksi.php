<?php
//config/koneksi.php

$host - 'localhost';
$user = 'root';
$pasword = '';
$database = 'db_warung_abc';

$koneksi =mysqli_conect($host, $user,$pasword,$database);

if (!koneksi) {
    die('koneksi database gagal: ' . mysqli_conect_eror());

}
?>