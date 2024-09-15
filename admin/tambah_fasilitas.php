<?php
include '../koneksi.php';

$id_kamar = $_POST['id_kamar'];
$fasilitas = $_POST['fasilitas'];

mysqli_query($koneksi, "INSERT INTO fasilitas_kamar VALUE('', '$id_kamar', '$fasilitas')");

header("location:fasilitas.php");
?>