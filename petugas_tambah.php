<?php
include_once('header.php');
include_once('class_login.php');
(new Login())->cekSesi();
?>
		<div class="md-9 sm-9 col">
			<h3>Tambah Petugas</h3>
			<br>
			<form action="petugas_simpan.php" method="POST">
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>NIP</label>
					</div>
					<div class="col-2">
						<input type="text" maxlength="5" name="nip" placeholder="NIP petugas" class="input-block" required>
					</div>
				</div>
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>Nama</label>
					</div>
					<div class="col-6">
						<input type="text" name="nama" placeholder="Nama petugas" class="input-block" required>
					</div>
				</div>
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>Ponsel</label>
					</div>
					<div class="col-4">
						<input type="text" name="ponsel" maxlength="13" placeholder="Nomor ponsel" class="input-block" required>
					</div>
				</div>
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>Email</label>
					</div>
					<div class="col-7">
						<input type="email" name="email" placeholder="Alamat email" required class="input-block">
					</div>
				</div>
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>Alamat</label>
					</div>
					<div class="col-9">
						<textarea name="alamat" placeholder="Alamat rumah" required rows="3" class="input-block"></textarea>
					</div>
				</div>
				<div class="row form-group flex-middle">
					<div class="col-3"></div>
					<div class="col-9">
						<input type="submit" value="Simpan" class="paper-btn btn-success">
						<a href="petugas.php" class="paper-btn btn-primary">Batal</a>
					</div>
				</div>
			</form>
		</div>
<?php
include_once('sidebar.php');
include_once('footer.php');
?>
