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
    <center>||<a href="tambah_form_penerbit.html">Tambah Data</a>||</center>
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
            <th>ID Penerbit</th>
            <th>Nama Penerbit</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Telepon</th>
            
            <th>OPSI</th>
        </tr>
</thead>
<tbody>

<?php
include 'koneksi.php';

if(isset($_GET['kata_cari'])) {
    $kata_cari = $_GET['kata_cari'];
    $query = "SELECT * FROM tb_penerbit WHERE id_penerbit like '%".$kata_cari."%' OR
    nama_penerbit like '%".$kata_cari."%' ORDER BY id_penerbit ASC";
} else {
    $query = "SELECT * FROM tb_penerbit ORDER BY id_penerbit ASC";
}
$result = mysqli_query($koneksi, $query);
if(!$result) {
    die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    }
while ($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?php echo $row['id_penerbit']; ?></td>
    <td><?php echo $row['nama_penerbit']; ?></td>
    <td><?php echo $row['alamat']; ?></td>
    <td><?php echo $row['kota']; ?></td>
    <td><?php echo $row['telepon']; ?></td>
    <td>
    <a href="edit_form_penerbit.php?id_penerbit=<?php echo $row['id_penerbit']; ?>">EDIT</a>
    <a href="delete_penerbit.php?id_penerbit=<?php echo $row['id_penerbit']; ?>">HAPUS</a>
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