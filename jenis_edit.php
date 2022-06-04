<?php
include_once('DB.php'); 
include_once('header.php'); 
include_once('class_login.php');
(new Login())->cekSesi();
$j=new DB();
$data=$_GET['id'];
$hasil=$j->bacaSatuData('jenis', 'id', $data);
?>
		<div class="md-9 sm-9 col">
			<h3>Ubah Jenis</h3>
			<br>
			<form action="jenis_update.php" method="POST">
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>Nama Jenis</label>
					</div>
					<div class="col-9">
						<input type="text" name="nama" value="<?php echo $hasil->nama; ?>" class="input-block" required>
						<input type="hidden" name="id" value="<?php echo $data; ?>">
					</div>
				</div>
				<div class="row form-group flex-middle">
					<div class="col-3"></div>
					<div class="col-9">
						<input type="submit" value="Simpan" class="paper-btn btn-success">
						<a href="jenis.php" class="paper-btn btn-primary">Batal</a>
					</div>
				</div>
			</form>
		</div>
<?php
include_once('sidebar.php');
include_once('footer.php');
?>
