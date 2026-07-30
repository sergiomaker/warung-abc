<?php
//config/koneksi.php

$koneksi = mysqli_connect("localhost", "root", "","warung_abc");

if (!$koneksi) {
    die('koneksi database gagal: ' . mysqli_conect_eror());

}
?>