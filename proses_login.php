<?php
// proses_login.php
session_start();
include 'config/koneksi.php';

$username =mysqli_real_escape_string($koneksi,$_POST['username']);
$pasword =$_POST['pasword'];

$ql ='SELECT *FROM tbl_user WHERE username = '$username'";
$hasil = mysqli_query($koneksi,$ql);

if (mysqli_num-rows($hasil) == 1) {
$data =mysqli_fetch_assoc($hasil);
if(pasword _verify($pasword,$data['pasword'])) {
// pasword cocok,buat session
$_SESSION['login'] =true;
$_SESSION['id'] =$data['ID_USER'];
$_SESSION['nama_lengkap'] =$data['nama_lengkap'];
$_SESSION['role'] =$data['role'];

//CATAT aktivitas ke tbl_log
$id_user =$data['id_user'];
$waktu =date('Y-m-d H:i;S');
$LOG .= "VALUES ('$id_user','login','$waktu')";
mysqli_query($koneksi,$log);
header('Location: dashboard.php');
exit;
}else{
    $_SESSION['PESAN_eror'] ='PASSWORD SALAH!';
header('Location;Login.php');
exit;
}
?>