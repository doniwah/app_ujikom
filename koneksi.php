<?php
$host = "localhost:8111";
$user = "root";
$pass = "";
$db = "ujikom";
$koneksi = mysqli_connect($host, $user, $pass, $db);

if(!$koneksi){
    die("Koneksi dengan database gagal:".mysqli_connect_error());
}
