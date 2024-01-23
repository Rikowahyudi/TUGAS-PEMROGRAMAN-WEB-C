<?php

include 'koneksi.php';

$id = $_POST['id_buku'];
$kategori = $POST['kategori'];
$nama_buku = $_POST['nama_buku'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$penerbit = $_POST['penerbit'];

mysqli_query($koneksi,"update tb_bookstoreinformatics set nama_buku='$nama_buku',
harga='$harga', stok='$stok' where id_buku='$id_buku'");

header("location:index.php");

?>