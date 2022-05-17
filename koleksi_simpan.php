<?php
include_once('DB.php');
$koleksi=new DB();
// tangkap kiriman data
$data=array(
	'jenis_id' => $_POST['jenis_id'],
	'judul' => $_POST['judul'],
	'pengarang' => $_POST['pengarang'],
	'penerbit' => $_POST['penerbit'],
	'tahun' => $_POST['tahun']
);
// tambahkan ke tabel koleksi
$koleksi->tambahData('koleksi', $data);
// kembali ke koleksi.php
header('location:koleksi.php');
?>