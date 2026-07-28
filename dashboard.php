<?php
//dashboard.php
include 'include/cek_session.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard - warung ABC</title>
</head>
<body>
    <h1>selamat datang, <?php echo $_SESSION['NAMA-lengkap']; ?></H1>
    <p>Anda login sebagai: <?php echp $_SESSION['role']; ?></P>
</body>
</html.