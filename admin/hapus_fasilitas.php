<?php
include '../koneksi.php';

$id_fasilitas = $_GET['id_fasilitas'];

mysqli_query($koneksi, "DELETE FROM fasilitas_kamar WHERE id_fasilitas='$id_fasilitas'");

header("location:fasilitas.php");
?>