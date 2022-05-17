<?php 
include_once('DB.php'); 
include_once('header.php'); 
?>
		<div class="md-9 sm-9 col">
			<h3>Anggota
				<span style="float:right">
					<a href="anggota_tambah.php" class="paper-btn btn-small btn-danger">+</a>
				</span>
			</h3>
			<br>
			<table class="table-hover">
			<thead>
				<tr>
					<th>NIA</th>
					<th>Nama</th>
					<th>Ponsel</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
<?php
$anggota = new DB();
$data = $anggota->bacaSemua('anggota', 'ponsel', 'DESC');
while($dapat = $data->fetch(PDO::FETCH_OBJ)) {
?>
				<tr>
					<td><?php echo $dapat->nia; ?></td>
					<td><?php echo $dapat->nama; ?></td>
					<td><?php echo $dapat->ponsel; ?></td>
					<td><?php echo $dapat->email; ?></td>
					<td><?php echo $dapat->alamat; ?></td>
					<td>
						<a href="anggota_edit.php?kunci=<?php echo $dapat->nia; ?>">Edit</a>
						<!--a onclick="return confirm('Anda yakin ingin menghapus data ini?')" href="anggota_hapus.php?kunci=<?php //echo $dapat->nia; ?>">Hapus</a-->
						<label for="modal-<?php echo $dapat->nia; ?>">Hapus</label>
						<input class="modal-state" id="modal-<?php echo $dapat->nia; ?>" type="checkbox">
						<div class="modal">
							<label class="modal-bg" for="modal-<?php echo $dapat->nia; ?>"></label>
							<div class="modal-body">
								<h4 class="modal-title">Hapus Data Anggota</h4>
								<p class="modal-text">Anda yakin akan menghapus data ini (NIA=<?php echo $dapat->nia; ?>)?</p>
								<a href="anggota_hapus.php?kunci=<?php echo $dapat->nia; ?>" class="paper-btn btn-small btn-danger">Ya, hapus!</a> <label class="paper-btn btn-small btn-primary" for="modal-<?php echo $dapat->nia; ?>">Batal</label>
							</div>
						</div>
					</td>
				</tr>
<?php 
} 
?>
			</tbody>
			</table>
		</div>
<?php
include_once('sidebar.php');
include_once('footer.php');
?>
