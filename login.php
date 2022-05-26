<?php 
include_once('class_login.php'); 
include_once('header.php');
?>
<div class="col-12" style="text-align:center;">
	<h3 class="text-center">Login Petugas</h3>
	<br>
    <?php 
        if(isset($_POST['login'])) {
            $nip = $_POST['nip'];
            $sandi = $_POST['sandi'];
            (new Login())->cekAkun($nip,$sandi);
        }
    ?>
	<div class="row flex-center">
		<form action="" method="POST">
			<div class="form-group">
				<input type="text" name="nip" placeholder="Masukan User ID" class="input-block" style="width:250px" required>
			</div>
			<div class="form-group">
				<input type="password" name="sandi" placeholder="Masukan Password" class="input-block" style="width:250px" required>
			</div>
			<div class="col-4 row flex-center">
				<input type="submit" value="Login" name="login" class="paper-btn btn-small btn-secondary btn-block">
			</div>
		</form>
	</div>
	
	<hr>
    <a href="index.php">Cari Koleksi</a>
	<br>
</div>
<?php
include_once('footer.php');
?>
