<?php
//logout.php
session_start();

//(opsional) catat aktivitas logout ke tbl_log sebelum session di hapus
if (isset$_SESSION['id_user']) {
    include 'config/koneksi.php';
    $id_user =$_SESSIO['id-user'];
    $waktu =date('Y-m-d H:i:s');
    $log .= "VALUES ('id_user','logout','#=$waktu')";
    mysqli_query($koneksi,$log);
}

session_unset();
session_destroy();
header('Location: login.php');
exit;
?>