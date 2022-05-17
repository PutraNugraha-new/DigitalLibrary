<?php
include_once('header.php');
?>
		<div class="md-9 sm-9 col">
			<h3>Tambah Anggota</h3>
			<br>
			<form action="anggota_simpan.php" method="POST">
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>NIA</label>
					</div>
					<div class="col-2">
						<input type="text" name="nia" placeholder="NIA anggota" class="input-block" required>
					</div>
				</div>
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>Nama</label>
					</div>
					<div class="col-6">
						<input type="text" name="nama" placeholder="Nama anggota" class="input-block" required>
					</div>
				</div>
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>Ponsel</label>
					</div>
					<div class="col-4">
						<input type="text" name="ponsel" placeholder="Nomor ponsel" class="input-block" required>
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
						<a href="anggota.php" class="paper-btn btn-primary">Batal</a>
					</div>
				</div>
			</form>
		</div>
<?php
include_once('sidebar.php');
include_once('footer.php');
?>