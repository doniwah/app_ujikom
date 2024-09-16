<?php
include '../koneksi.php';

// print_r($_REQUEST);exit();
$id_kamar = $_POST['id_kamar'];
$fasilitas = $_POST['fasilitas'];

mysqli_query($koneksi, "INSERT INTO fasilitas_kamar(id_fasilitas, id_kamar,fasilitas) values (NULL, '$id_kamar','$fasilitas')");

header("location:fasilitas.php");
