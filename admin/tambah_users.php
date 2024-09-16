<?php
include '../koneksi.php';

// print_r($_REQUEST);exit();
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

mysqli_query($koneksi, "INSERT INTO users values (NULL, '$nama', '$username', '$password', '$level')");

header("location:users.php");
