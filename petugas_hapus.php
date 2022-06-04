<?php
include_once('class_login.php');
(new Login())->cekSesi();
include_once('DB.php');
$obj=new DB();
// tangkap kiriman data
$data=$_GET['key'];
// hapus dari tabel petugas
$obj->hapusData('petugas', 'nip', $data);
// kembali ke petugas.php
header('location:petugas.php');
?>