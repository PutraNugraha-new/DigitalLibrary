<?php
include_once('class_login.php');
(new Login())->cekSesi();
include_once('DB.php');
try {
    $jenis=new DB();
    // tangkap kiriman data
    $data=$_GET['id'];
    // hapus dari tabel jenis
    $jenis->hapusData('jenis', 'id', $data);
}catch (Exception $e){
    header('location:jenis.php');
    
}
header('location:jenis.php');

// kembali ke jenis.php
?>