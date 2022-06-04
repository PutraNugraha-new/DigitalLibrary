<?php
include_once('header.php');
include_once('class_login.php');
(new Login())->cekSesi();
?>
		<div class="md-9 sm-9 col">
			<h3>Tambah Jenis</h3>
			<br>
			<form action="jenis_simpan.php" method="POST">
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>Nama Jenis</label>
					</div>
					<div class="col-9">
						<input type="text" name="nama" placeholder="Nama jenis" class="input-block" required>
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
