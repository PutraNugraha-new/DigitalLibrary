<?php 
include_once('DB.php'); 
include_once('header.php'); 
include_once('class_login.php');
(new Login())->cekSesi();
$k=new DB();
$id=$_GET['id'];
$hasil=$k->bacaSatuData('koleksi', 'id', $id);
?>
		<div class="md-9 sm-9 col">
			<h3>Ubah Koleksi</h3>
			<br>
			<form action="koleksi_update.php" method="POST">
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>Jenis</label>
					</div>
					<div class="col-9">
						<input type="hidden" name="id" value="<?php echo $id; ?>">
						<select name="jenis_id" required>
							<option value="">--pilih--</option>
<?php
$jenis = new DB();
$data = $jenis->bacaSemua('jenis', 'nama', 'ASC');
while($dapat=$data->fetch(PDO::FETCH_OBJ)) {
?>
							<option value="<?php echo $dapat->id;?>" <?php echo ($hasil->jenis_id==$dapat->id)?"selected":""?>><?php echo $dapat->nama;?></option>
<?php
}
?>
						</select>
					</div>
				</div>
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>Judul</label>
					</div>
					<div class="col-9">
						<input type="text" name="judul" value="<?php echo $hasil->judul; ?>" class="input-block" required>
					</div>
				</div>
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>Pengarang</label>
					</div>
					<div class="col-6">
						<input type="text" name="pengarang" value="<?php echo $hasil->pengarang; ?>"  class="input-block" required>
					</div>
				</div>
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>Penerbit</label>
					</div>
					<div class="col-4">
						<input type="text" name="penerbit" value="<?php echo $hasil->penerbit; ?>" class="input-block" required>
					</div>
				</div>
				<div class="row form-group flex-middle">
					<div class="col-3">
						<label>Tahun</label>
					</div>
					<div class="col-9">
						<input type="text" name="tahun" value="<?php echo $hasil->tahun; ?>" required>
					</div>
				</div>
				<div class="row form-group flex-middle">
					<div class="col-3"></div>
					<div class="col-9">
						<input type="submit" value="Simpan" class="paper-btn btn-success">
						<a href="koleksi.php" class="paper-btn btn-primary">Batal</a>
					</div>
				</div>
			</form>
		</div>
<?php
include_once('sidebar.php');
include_once('footer.php');
?>
