<?php 
include_once('class_koleksi.php'); 
include_once('header.php'); 
include_once('class_login.php');
(new Login())->cekSesi();
?>
		<div class="md-9 sm-9 col">
			<h3>Koleksi
				<span style="float:right">
					<a href="koleksi_tambah.php" class="paper-btn btn-small btn-warning">+</a>
				</span>
			</h3>
			<br>
			<table class="table-hover">
			<thead>
				<tr>
					<th>No.</th>
					<th>Judul</th>
					<th>Pengarang</th>
					<th>Penerbit</th>
					<th>Tahun</th>
					<th>Jenis</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
<?php
$nomor=1;
$koleksi = new Koleksi();
$data = $koleksi->bacaSemua('view_koleksi', 'pengarang', 'DESC');
while($dapat = $data->fetch(PDO::FETCH_OBJ)) {
?>
				<tr>
					<td><?php echo $nomor++; ?></td>
					<td><?php echo $dapat->judul; ?></td>
					<td><?php echo $dapat->pengarang; ?></td>
					<td><?php echo $dapat->penerbit; ?></td>
					<td><?php echo $dapat->tahun; ?></td>
					<td><?php echo $dapat->nama; ?></td>
					<td>
						<a href="koleksi_edit.php?id=<?php echo $dapat->id; ?>">Edit</a>
						<!--a onclick="return confirm('Anda yakin ingin menghapus data ini?')" href="koleksi_hapus.php?id=<?php //echo $dapat->id; ?>">Hapus</a-->
						<label for="modal-<?php echo $dapat->id; ?>" class="paper-btn btn-danger btn-small">Hapus</label>
						<input class="modal-state" id="modal-<?php echo $dapat->id; ?>" type="checkbox">
						<div class="modal">
							<label class="modal-bg" for="modal-<?php echo $dapat->id; ?>"></label>
							<div class="modal-body">
								<h4 class="modal-title">Hapus Data Koleksi</h4>
								<p class="modal-text">Anda yakin akan menghapus data ini (ID=<?php echo $dapat->id; ?>)?</p>
								<a href="koleksi_hapus.php?id=<?php echo $dapat->id; ?>" class="paper-btn btn-small btn-danger">Ya, hapus!</a> <label class="paper-btn btn-small btn-primary" for="modal-<?php echo $dapat->id; ?>">Batal</label>
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
