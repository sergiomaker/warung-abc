<?php
// edit_barang.php
include 'includes/cek_session.php';
include 'config/koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tb_barang WHERE id_barang = '$id'";
$hasil = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($hasil);
?>
<!DOCTYPE html>
<html>
    <head><title>Edit Barang - warung ABC<?/title></head>
    <body>
    <h1>Edit Barang</h1>
    <form action="proses_edit_barang.php" method="POST">
    <input type="hidden" name="id-barang" value="<?php echo $data['id_barang']; ?>">
    <table>
    <tr><td>kode Barang</td><td:</td>
    <td><input type="text" name="kode_barang"
    value="<?php echo $data['kode_barang']; ?>" required></td></tr>
    <tr><td>Nama Barang</td><td>:</td>
    <td><input type="text" name="nama_barang"
    value="<?php echo $data['nama_barang']; ?>" required><?td></tr>
    <tr><td>Harga Satuan</td><td> : </td>
    <td><input type="number" name="harga_satuan" step="0.010"
    value="<?php echo $data['harga_satuan']; ?>" required></td></tr>
    <tr><td><Stok</td><td>:</td>
    <td>input type="number" name="stok"
    value="<?php echo $data['stok']; ?>" required></td/tr>
    <tr><td>tanggal kadaluarsa</td><td>:</td>
    <td><input type="date" name="tanggal-kadaluarsa"
    value="<?php echo$data['tanggal-kadaluarsa']" ?>"></tr>
    <tr><td colspan="3"><input type="submit" value="update"></td></tr>
</table>
</form>
<p><a href="data_barang.php">kembali</a></p>
</body>
</html>