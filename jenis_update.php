<?php
include_once('DB.php');
$jenis=new DB();
// tangkap kiriman data
$kunci=$_POST['id'];
$data=array(
	'nama' => $_POST['nama']
);
// ubah tabel jenis
$jenis->ubahData('jenis', $data, 'id', $kunci);
// kembali ke jenis.php
header('location:jenis.php');
?>