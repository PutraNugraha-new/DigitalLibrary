<?php
include_once('DB.php'); 
include_once('header.php'); 
include_once('class_login.php');
(new Login())->cekSesi();
$a=new DB();
$data=$_GET['kunci'];
$hasil=$a->bacaSatuData('anggota', 'nia', $data);
?>
		<div class="md-9 sm-9 col">
			<h3>Ubah Anggota</h3>
			<br>
			<form action="anggota_update.php" method="POST">
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>NIA</label>
					</div>
					<div class="col-2">
						<input type="text" name="nia" value="<?php echo $hasil->nia; ?>" class="input-block" readonly>
					</div>
				</div>
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>Nama</label>
					</div>
					<div class="col-6">
						<input type="text" name="nama" value="<?php echo $hasil->nama; ?>" class="input-block" required>
					</div>
				</div>
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>Ponsel</label>
					</div>
					<div class="col-4">
						<input type="text" name="ponsel" value="<?php echo $hasil->ponsel; ?>" class="input-block" required>
					</div>
				</div>
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>Email</label>
					</div>
					<div class="col-7">
						<input type="email" name="email" value="<?php echo $hasil->email; ?>" required class="input-block">
					</div>
				</div>
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>Alamat</label>
					</div>
					<div class="col-9">
						<textarea name="alamat" required rows="3" class="input-block"><?php echo $hasil->alamat; ?></textarea>
					</div>
				</div>
				<div class="row form-group flex-middle">
					<div class="col-3"></div>
					<div class="col-9">
						<input type="submit" value="Simpan" class="paper-btn btn-success">
						<a href="anggota.php" class="paper-btn btn-primary">Batal</a>
					</div>
				</div>
			</form>
		</div>
<?php
include_once('sidebar.php');
include_once('footer.php');
?>
