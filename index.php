<?php 
include_once('class_cari.php'); 
include_once('header.php');
?>
<div class="col-12" style="text-align:center;">
	<h3 class="text-center">Cari Koleksi</h3>
	<br>
	<div class="row flex-center">
		<form action="" method="POST">
			<div class="form-group">
				<input type="text" name="kunci" placeholder="ketik di sini..." class="input-block" style="width:400px" required>
			</div>
			<div class="row form-group flex-center">
				<label class="paper-radio" style="margin-right:20px">
					<input type="radio" name="kolom" value="judul" checked> <span>Judul</span>
				</label>
				<label class="paper-radio" style="margin-right:20px">
					<input type="radio" name="kolom" value="pengarang"> <span>Pengarang</span>
				</label>
				<label class="paper-radio">
					<input type="radio" name="kolom" value="penerbit"> <span>Penerbit</span>
				</label>
			</div>
			<div class="col-4 row flex-center">
				<input type="submit" value="Cari" name="cari" class="paper-btn btn-small btn-success btn-block">
			</div>
		</form>
	</div>
	
	<hr>
	<br>
	
	<div class="" style="width:700px; margin:0 auto; text-align:center">
		<?php
		if(isset($_POST['cari'])) {
			$cari = new Pencarian();
			$hasil = $cari->jumlahDitemukan($_POST['kolom'], $_POST['kunci']);
			if($hasil==0) {
				echo "Tidak menemukan hasil...";
			}
			else {
				echo "Ditemukan ". $hasil . " koleksi...";
				echo "<br><br>";
				$data = $cari->cariKoleksi($_POST['kolom'], $_POST['kunci']);
		?>
			<div class="alert alert-success">
				<table class="table-hover">
			<thead>
				<tr>
					<th class="text-secondary">Judul</th>
					<th class="text-secondary">Pengarang</th>
					<th class="text-secondary">Penerbit</th>
					<th class="text-secondary">Tahun</th>
					<th class="text-secondary">Jenis</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					while($dapat = $data->fetch(PDO::FETCH_OBJ)) {
				?>
						<tr>
							<td class="text-primary"><?= $dapat->judul?></td>
							<td class="text-primary"><?= $dapat->pengarang?></td>
							<td class="text-primary"><?= $dapat->penerbit?></td>
							<td class="text-primary"><?= $dapat->tahun?></td>
							<td class="text-primary"><?= $dapat->nama?></td>
						</tr>
				<?php	
					}
				?>
			</tbody>
			</table>
			</div>
			<?php	
			}

		}
		?>
	
	</div>
	<br>
	<a href="login.php">Login Petugas</a>
</div>
<?php
include_once('footer.php');
?>
