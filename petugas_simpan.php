<?php
include_once('DB.php');
$petugas=new DB();
// tangkap kiriman data
$data=array(
	'nip' => $_POST['nip'],
	'nama' => $_POST['nama'],
	'ponsel' => $_POST['ponsel'],
	'email' => $_POST['email'],
	'alamat' => $_POST['alamat']
);
// tambahkan ke tabel petugas
$petugas->tambahData('petugas', $data);
// kembali ke petugas.php
header('location:petugas.php');
?>