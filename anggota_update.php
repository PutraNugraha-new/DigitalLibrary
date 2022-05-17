<?php
include_once('DB.php');
$a=new DB();
// tangkap kiriman data
$kunci=$_POST['nia'];
$data=array(
	'nama' => $_POST['nama'],
	'ponsel' => $_POST['ponsel'],
	'email' => $_POST['email'],
	'alamat' => $_POST['alamat']
);
// ubah tabel anggota
$a->ubahData('anggota', $data, 'nia', $kunci);
// kembali ke anggota.php
header('location:anggota.php');
?>