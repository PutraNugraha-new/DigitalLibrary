<?php
include_once('DB.php');
include_once('header.php');
include_once('class_login.php');
(new Login())->cekSesi();
?>
<div class="md-9 sm-9 col">
	<h3>Jenis
		<span style="float:right">
			<a href="jenis_tambah.php" class="paper-btn btn-small btn-secondary">+</a>
		</span>
	</h3>
	<br>

	<br>
	<table class="table-hover">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$nomor = 1;
			$jenis = new DB();
			$data = $jenis->bacaSemua('jenis', 'nama', 'DESC');
			while ($dapat = $data->fetch(PDO::FETCH_OBJ)) {
			?>

				<tr>
					<td><?php echo $nomor++; ?></td>
					<td><?php echo $dapat->nama; ?></td>
					<td>
						<a href="jenis_edit.php?id=<?php echo $dapat->id; ?>">Edit</a>
						<label for="modal-<?php echo $dapat->id; ?>" class="paper-btn btn-danger btn-small">Hapus</label>

						<input class="modal-state" id="modal-<?php echo $dapat->id; ?>" type="checkbox">
						<div class="modal">
							<label class="modal-bg" for="modal-<?php echo $dapat->id; ?>"></label>
							<div class="modal-body">
								<h4 class="modal-title">Hapus Data Koleksi</h4>

								<?php if ($jenis->jenisKoleksi('view_koleksi', $dapat->id) == 0) { ?>
									<p class="modal-text">Anda yakin akan menghapus data ini (ID=<?php echo $dapat->id; ?>)?</p>
									<a href="jenis_hapus.php?id=<?php echo $dapat->id; ?>" class="paper-btn btn-small btn-danger">Ya, hapus!</a>
								<?php } else { ?>
									<p class="modal-text">Maaf, jenis ini tidak dapat dihapus karena digunakan oleh koleksi..</p>
								<?php } ?>
								
								<label class="paper-btn btn-small btn-primary" for="modal-<?php echo $dapat->id; ?>">Batal</label>
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