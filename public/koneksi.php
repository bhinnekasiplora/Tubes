<?php 
$namaServer = "localhost";
$namaPengguna = "root";
$password = "bhinneka";
$nama_db = "login";

$koneksi = new mysqli($namaServer, $namaPengguna, $password, $nama_db);

if($koneksi->connect_error) {
	die("koneksi gagal : " .$koneksi->connect_error."<br>");
}

 ?>
