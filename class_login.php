<?php
session_start();
include_once('DB.php');

class Login extends DB
{
	function cekAkun($nip,$sandi)
	{
        // echo "$nip - $sandi";
		$sql = "SELECT * FROM petugas WHERE nip='$nip'";
		$q = $this->dbConn->prepare($sql);
		$q->execute();
		$r=$q->fetch(PDO::FETCH_OBJ);
		if($r->nip <> $nip) {
			echo "User ID tidak ditemukan!";
		}else{
			// echo "Horeee...";
			if($r->sandi <> md5($sandi)) {
				echo "Sandi salah";
			}else{
				// echo "sandi benar";
				$this->buatSesi($r->nip,$r->nama);
				header('location:beranda.php');
			}
		}
	}
	function buatSesi($nip,$nama)
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
