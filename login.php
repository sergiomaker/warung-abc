<!DOCTYPE html>
<html>
    <head>
    <title>Login -warung ABC</title>
</head>
<body>
   <h1>Login AplikasiKasir Warung ABC</h1>

   <?php
   session_start();
   if (isset($_SESSION['pesan_error'])){
    echo '<P>'. $_SESSION['pesan_eror'] . '</P>';
    unset($_SESSION['pesan_eror']);
   }
   ?>

   <form action="proses_login.php" method="POST">
   <table>
    <tr>
        <td>username</td>
        <td>:</td>
        <td><input type="text" name="username" required></td>
</tr>
<tr>
    <td>Pasword</td>
    <td>:</td>
    <td><input type="password" name="pasword" ></td>
</tr>
<tr>
    <td colspan="3"></td>
    <input type="submit"value="Login">
</tr>
</table>
</form>
</body>
</html

