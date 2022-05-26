<?php
session_start();
include_once('DB.php');

class Login extends DB
{
	function cekAkun($nip,$sandi)
	{
        echo "$nip - $sandi";
		// $sql = "SELECT * FROM $tabel ORDER BY $kolom $order";
		// $q = $this->dbConn->prepare($sql);
		// $q->execute();
		// return $q;
	}
	function buatSesi()
	{
        $_SESSION['nip'] = $nip;
        $_SESSION['nama'] = $nama;
        $_SESSION['kode'] = "teskode";
	}
	function cekSesi()
	{
        if(($_SESSION['nip']=='') OR ($_SESSION['nama']=='') OR ($_SESSION['kode']<>'teskode')) {
            header('location:peringatan.php');
        }
	}
	function logout()
	{
        session_start();
        session_destroy();
        header('location:index.php');
	}
	
}
