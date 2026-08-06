<?php
// dashboard.php
include 'includes/cek_session.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard - warung ABC</title>
</head>
<body>
    <h1>selamat datang, <?php echo $_SESSION['nama_lengkap']; ?></H1>
    <p>Anda login sebagai: <?php echo $_SESSION['role']; ?></P>

    <ul>
        <?php if ($_SESSION['role']== 'admin' || $_SESSION['role'] == 'gudang') {?>
         <li><a href="data_barang.php">Data barang</a></li>
    <?php } ?>     
        <li><a href="transaksi.php">transaksi Kasir</li>
        <li><a href="riwayat_transaksi.php">Riwayat transaksi</a><li>
    <?php } ?>
</ul>
<a href="logout.php">Logout</a>
</body>
</html.