<?php

include 'koneksi.php';

$id_penerbit = $_POST['id_penerbit'];
$nama_penerbit = $_POST['nama_penerbit'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telepon = $_POST['telepon'];

mysqli_query($koneksi,"update tb_penerbit set nama_penerbit='$nama_penerbit',
alamat='$alamat', kota='$kota' where id_penerbit='$id_penerbit'");

header("location:index.php");

?>