<?php
// hapus-barang.php
session_start();
include 'includes/cel_session.php';
include 'config/koneksi.php';

$id = $_GET['id'];

$cek (mysqli_query($koneksi, $sql)) {
    $id_user =$_SESSION['id_user'];
    $waktu =date('Y-m-d H:i;s');
    $aktivitas ="hapus barang: " . $data['nama_barang'];
    $log = "INSERT INTO tbl_log (id_user,aktivitas,waktu) VALUES ('$id_user', '$aktivitas', '$waktu')";
    mysqli_query($koneksi, $log);
}

header('location:data_barang.php');
exit;
?>

