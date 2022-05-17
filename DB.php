<?php
date_default_timezone_set('Asia/Jakarta');
class DB
{
	private $dbHost = "localhost";
	private $dbUser = "root";
	private $dbPass = "";
	private $dbName = "pbo_perpus";
	protected $dbConn;
	function __construct()
	{
		try {
			$this->dbConn = new PDO("mysql:host=$this->dbHost;port=3306;dbname=$this->dbName", $this->dbUser, $this->dbPass);
			$this->dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		return $this->dbConn;
	}
	function bacaSemua($tabel, $kolom, $order)
	{
		$sql = "SELECT * FROM $tabel ORDER BY $kolom $order";
		$q = $this->dbConn->prepare($sql);
		$q->execute();
		return $q;
	}
	function bacaSatuData($tabel, $kolom, $data)
	{
		$sql = "SELECT * FROM $tabel WHERE $kolom='$data'";
		$q = $this->dbConn->prepare($sql);
		$q->execute();
		$r = $q->fetch(PDO::FETCH_OBJ);
		return $r;
	}
	//reusable method
	function tambahData($tabel, $data)
	{
		$kolom = $this->ambilKolom($data);
		$entri = $this->ambilEntri($data);
		$sql = "INSERT INTO $tabel ($kolom) VALUES ($entri)";
		$q = $this->dbConn->prepare($sql);
		$q->execute();
		return $q;
	}
	function ubahData($tabel, $data, $kolom, $kunci)
	{
		$ubah = '';
		foreach ($data as $k => $d) {
			$ubah .= "$k='$d',";
		}
		$ubah = substr($ubah, 0, -1);
		$sql = "UPDATE $tabel SET $ubah WHERE $kolom='$kunci'";
		$q = $this->dbConn->prepare($sql);
		$q->execute();
	}
	private function ambilKolom($data)
	{
		$kolom = '';
		foreach ($data as $k => $d) {
			$kolom .= $k . ',';
		}
		$kolom = substr($kolom, 0, -1);
		return $kolom;
	}
	private function ambilEntri($data)
	{
		$entri = '';
		foreach ($data as $k => $d) {
			$entri .= "'$d',";
		}
		$entri = substr($entri, 0, -1);
		return $entri;
	}
	function jumlahData($kolom, $tabel)
	{
		$sql = "SELECT COUNT($kolom) AS jumlah FROM $tabel";
		$q = $this->dbConn->prepare($sql);
		$q->execute();
		$r = $q->fetch(PDO::FETCH_OBJ);
		echo $r->jumlah;
	}
	function hapusData($tabel, $kolom, $data)
	{
		$sql = "DELETE FROM $tabel WHERE $kolom='$data'";
		$q = $this->dbConn->prepare($sql);
		$q->execute();
	}
	function jenisKoleksi($tabel, $data)
	{
		$sql = "SELECT * FROM $tabel WHERE jenis_id=$data";
		$q = $this->dbConn->prepare($sql);
		$q->execute();
		return $q->rowCount();
	}
}
