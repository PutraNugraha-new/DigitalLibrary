<?php
include_once('DB.php');
class Pencarian extends DB {
	function cariKoleksi($kolom, $kunci) {
		$sql="SELECT * FROM view_koleksi WHERE $kolom LIKE '%$kunci%'";
		$q=$this->dbConn->prepare($sql);
		$q->execute();
		return $q;
	}
	function jumlahDitemukan($kolom, $kunci) {
		$sql="SELECT COUNT($kolom) AS jumlah FROM view_koleksi WHERE $kolom LIKE '%$kunci%'";
		$q=$this->dbConn->prepare($sql);
		$q->execute();
		$r=$q->fetch(PDO::FETCH_OBJ);
		return $r->jumlah;
	}
}
?>