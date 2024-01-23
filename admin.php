<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <title>Tampil Data</title>

    <style>
    fieldset {
        width: 400px;
        margin:auto;
        }
    </style>
</head>
<body>
<fieldset>
    <legend align="center">Bookstore Riko Wahyudi</legend>
    <h3>
        <a href="index.php">Home</a> |
        <a href="admin.php">Admin</a> |
        <a href="pengadaan.php">Pengadaan</a>
    </h3>
    <legend align="center">Selamat Datang Di Bookstore</legend>
    <center><h1>Pencarian Buku</h1></center>
    <center>||<a href="tambah_form.html">Tambah Data</a>||</center>
<br>
<form method="GET" action="index.php" style="text-align: center;">
<label>Kata Pencarian : </label>
<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo
$_GET['kata_cari']; } ?>" />
<button type="submit">Cari</button>

</form>
<table>
    <thead>
        <tr>
            <th>ID Buku</th>
            <th>Kategori</th>
            <th>Nama Buku</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Penerbit</th>
            
            <th>OPSI</th>
        </tr>
</thead>
<tbody>

<?php
include 'koneksi.php';

if(isset($_GET['kata_cari'])) {
    $kata_cari = $_GET['kata_cari'];
    $query = "SELECT * FROM tb_bookstoreinformatics WHERE id_buku like '%".$kata_cari."%' OR
    nama_buku like '%".$kata_cari."%' ORDER BY id_buku ASC";
} else {
    $query = "SELECT * FROM tb_bookstoreinformatics ORDER BY id_buku ASC";
}
$result = mysqli_query($koneksi, $query);
if(!$result) {
    die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    }
while ($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?php echo $row['id_buku']; ?></td>
    <td><?php echo $row['kategori']; ?></td>
    <td><?php echo $row['nama_buku']; ?></td>
    <td><?php echo $row['harga']; ?></td>
    <td><?php echo $row['stok']; ?></td>
    <td><?php echo $row['penerbit']; ?></td>
    <td>
    <a href="edit.php?id_buku=<?php echo $row['id_buku']; ?>">EDIT</a>
    <a href="delete.php?id_buku=<?php echo $row['id_buku']; ?>">HAPUS</a>
    </td>
</tr>

<?php
    }
?>


</tbody>
</table>
</fieldset>
</body>
</html>