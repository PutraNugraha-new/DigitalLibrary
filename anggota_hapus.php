<?php
include_once('DB.php');
include_once('class_login.php');
(new Login())->cekSesi();
$obj=new DB();
// tangkap kiriman data
$data=$_GET['kunci'];
// hapus dari tabel anggota
$obj->hapusData('anggota', 'nia', $data);
// kembali ke anggota.php
header('location:anggota.php');
?>