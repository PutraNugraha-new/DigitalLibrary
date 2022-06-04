<?php 
include_once('DB.php'); 
include_once('header.php');
include_once('class_login.php');
(new Login())->cekSesi();
$jumlah = new DB();
?>
		<div class="md-9 sm-9 col">
			<h3 class="text-center">Data Statistik</h3>
			<br>
			<div class="row text-center">
				<div class="md-3 sm-6 col border border-secondary background-secondary">
					<h1><?php $jumlah->jumlahData('id', 'jenis'); ?></h1>
					<p>Jenis Koleksi</p>
				</div>
				<div class="md-3 sm-6 col border border-warning background-warning">
					<h1><?php $jumlah->jumlahData('id', 'koleksi'); ?></h1>
					<p>Koleksi</p>
				</div>
				<div class="md-3 sm-6 col border border-success background-success">
					<h1><?php $jumlah->jumlahData('nip', 'petugas'); ?></h1>
					<p>Petugas</p>
				</div>
				<div class="md-3 sm-6 col border border-danger background-danger">
					<h1><?php $jumlah->jumlahData('nia', 'anggota'); ?></h1>
					<p>Anggota</p>
				</div>
			</div>
		</div>
<?php
include_once('sidebar.php');
include_once('footer.php');
?>
