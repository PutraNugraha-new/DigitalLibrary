<?php
include_once('class_login.php');
(new Login())->cekSesi();
include_once('DB.php');
$anggota=new DB();
// tangkap kiriman data
$data=array(
	'nia' => $_POST['nia'],
	'nama' => $_POST['nama'],
	'ponsel' => $_POST['ponsel'],
	'email' => $_POST['email'],
	'alamat' => $_POST['alamat']
);
// tambahkan ke tabel anggota
$anggota->tambahData('anggota', $data);
// kembali ke anggota.php
header('location:anggota.php');
?>