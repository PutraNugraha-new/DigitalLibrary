<?php 
include_once('DB.php'); 
include_once('header.php'); 
?>
		<div class="md-9 sm-9 col">
			<h3>Petugas
				<span style="float:right">
					<a href="petugas_tambah.php" class="paper-btn btn-small btn-success">+</a>
				</span>
			</h3>
			<br>
			<table class="table-hover">
			<thead>
				<tr>
					<th>NIP</th>
					<th>Nama</th>
					<th>Ponsel</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
<?php
$petugas = new DB();
$data = $petugas->bacaSemua('petugas', 'email', 'ASC');
while($dapat = $data->fetch(PDO::FETCH_OBJ)) {
?>
				<tr>
					<td><?php echo $dapat->nip; ?></td>
					<td><?php echo $dapat->nama; ?></td>
					<td><?php echo $dapat->ponsel; ?></td>
					<td><?php echo $dapat->email; ?></td>
					<td><?php echo $dapat->alamat; ?></td>
					<td>
						<a href="petugas_edit.php?key=<?php echo $dapat->nip; ?>">Edit</a>
						<!--a onclick="return confirm('Anda yakin ingin menghapus data ini?')" href="petugas_hapus.php?key=<?php //echo $dapat->nip; ?>">Hapus</a-->
						<label for="modal-<?php echo $dapat->nip; ?>">Hapus</label>
						<input class="modal-state" id="modal-<?php echo $dapat->nip; ?>" type="checkbox">
						<div class="modal">
							<label class="modal-bg" for="modal-<?php echo $dapat->nip; ?>"></label>
							<div class="modal-body">
								<h4 class="modal-title">Hapus Data Petugas</h4>
								<p class="modal-text">Anda yakin akan menghapus data ini (NIP=<?php echo $dapat->nip; ?>)?</p>
								<a href="petugas_hapus.php?key=<?php echo $dapat->nip; ?>" class="paper-btn btn-small btn-danger">Ya, hapus!</a> <label class="paper-btn btn-small btn-primary" for="modal-<?php echo $dapat->nip; ?>">Batal</label>
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
