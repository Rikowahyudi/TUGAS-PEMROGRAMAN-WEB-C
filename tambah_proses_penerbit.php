<?php
include "koneksi.php";

$id_penerbit = $_POST["id_penerbit"];
$nama_penerbit = $_POST["nama_penerbit"];
$alamat = $_POST["alamat"];
$kota = $_POST["kota"];
$telepon = $_POST["telepon"];

$sql = "INSERT INTO tb_penerbit (id_penerbit, nama_penerbit, alamat, kota, telepon)
VALUES('$id_penerbit','$nama_penerbit','$alamat','$kota','$telepon')";
$query = mysqli_query($koneksi, $sql);

header("location:index.php");
?>