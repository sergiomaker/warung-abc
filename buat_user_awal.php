<?php
// buat_user_awal.php
// jalankan file ini SATU KALI saja lewat browser untuk membuat user awal
include 'config/koneksi.php';

$nama ='Adminstator';
$username = 'admin';
$password = password_hash('admin123', PASSWORD_DEFAULT);
$role ='admin';

$sql = "INSERT INTO tbl_user (nama_lengkap , username, password,role) VALUES ('$nama','$username','$password','$role')";

if (mysqli_query($koneksi, $sql)) {
echo "user admin berhasil dibuat. silahkan hafus file ini.";
} else {
    echo "Gagal membuat user: ". mysqli_error($koneksi);
}
?>