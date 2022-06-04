<?php
include_once('class_login.php');
(new Login())->cekSesi();
include_once('DB.php');
$p=new DB();
// tangkap kiriman data
$kunci=$_POST['nip'];
$data=array(
	'nama' => $_POST['nama'],
	'ponsel' => $_POST['ponsel'],
	'email' => $_POST['email'],
	'alamat' => $_POST['alamat']
);
// ubah tabel petugas
$p->ubahData('petugas', $data, 'nip', $kunci);
// kembali ke petugas.php
header('location:petugas.php');
?>