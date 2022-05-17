<?php
include_once('DB.php');
$koleksi=new DB();
// tangkap kiriman data
$id=$_POST['id'];
$data=array(
	'jenis_id' => $_POST['jenis_id'],
	'judul' => $_POST['judul'],
	'pengarang' => $_POST['pengarang'],
	'penerbit' => $_POST['penerbit'],
	'tahun' => $_POST['tahun']
);
// ubah data di tabel koleksi
$koleksi->ubahData('koleksi', $data, 'id', $id);
// kembali ke koleksi.php
header('location:koleksi.php');
?>