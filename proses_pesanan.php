<?php
include 'koneksi.php';

$id_pesanan = $_POST['id_pesanan'];
$cek_in = $_POST['cek_in'];
$cek_out = $_POST['cek_out'];
$jml_kamar = $_POST['jml_kamar'];
$nama_pemesan = $_POST['nama_pemesan'];
$email_pemesan = $_POST['email_pemesan'];
$no_pemesan = $_POST['no_pemesan'];
$nama_tamu = $_POST['nama_tamu'];
$id_kamar = $_POST['id_kamar'];

mysqli_query($koneksi, "INSERT INTO pesanan VALUE(NULL, '$cek_in', '$cek_out', '$jml_kamar', '$nama_pemesan', '$email_pemesan', '$no_pemesan', '$nama_tamu', '$id_kamar', '1')");

header("location:index.php");
