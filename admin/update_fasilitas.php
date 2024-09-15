<?php
include '../koneksi.php';

$id_fasilitas = $_POST['id_fasilitas'];
$id_kamar = $_POST['id_kamar'];
$fasilitas = $_POST['fasilitas'];

mysqli_query($koneksi, "UPDATE fasilitas_kamar SET id_kamar='$id_kamar', fasilitas='$fasilitas' WHERE id_fasilitas='$id_fasilitas'");

header("location:fasilitas.php");
?>