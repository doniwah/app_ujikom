<?php
include '../koneksi.php';

$id_pesanan = $_POST['id_pesanan'];
$status = $_POST['status'];

mysqli_query($koneksi, "UPDATE pesanan SET id_pesanan='$id_pesanan', status='$status' WHERE id_pesanan='$id_pesanan'");

header("location:pesanan.php");
