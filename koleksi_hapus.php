<?php
include_once('class_login.php');
(new Login())->cekSesi();
include_once('DB.php');
$a=new DB();
// tangkap kiriman data
$data=$_GET['id'];
// hapus dari tabel koleksi
$a->hapusData('koleksi', 'id', $data);
// kembali ke koleksi.php
header('location:koleksi.php');
?>