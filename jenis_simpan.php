<?php
include_once('DB.php');
$jenis=new DB();
// tangkap kiriman data
$data=array(
	'nama' => $_POST['nama']
);
// tambahkan ke tabel jenis
$jenis->tambahData('jenis', $data);
// kembali ke jenis.php
header('location:jenis.php');
?>