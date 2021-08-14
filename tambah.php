<?php include('config.php');?>
<center><font size="6">Tambah Data</font></center>
<hr>
<?php
if (isset($_POST['submit'])) {
	$Nim              = $_POST['Nim']; 
	$Nama_Mhs            = $_POST['Nama_Mhs'];
	$Jenis_Kelamin    = $_POST['Jenis_Kelamin'];
	$Kelas        = $_POST['Kelas'];

	$cek = mysqli_query($koneksi, "SELECT * from mahasiswa WHERE Nim='$Nim'" )
	or die(mysqli_error($koneksi));

	if (mysqli_num_rows($cek)==0) {
		$sql=mysqli_query($koneksi, "INSERT INTO mahasiswa(NIM, Nama_Mhs, Jenis_Kelamin, Kelas) values ('$Nim', '$Nama_Mhs', '$Jenis_Kelamin', '$Kelas')")
		or die(mysqli_error($koneksi));

		if ($sql) {
			echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_mhs";</script>';
		} else{
			echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
		}
	}else{
		echo '<div class="alert alert-warning">Gagal, NIM sudah terdaftar.</div>';
	}
}
?>

<form action="index.php?page=tambah_mhs" method="post">
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">NIM</label>
		<div class="col-md-6 col-sm-6">
			<input type="text" name="Nim" class="form-control" required>
		</div>
	</div>

	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Mahasiswa</label>
		<div class="col-md-6 col-sm-6">
			<input type="text" name="Nama_Mhs" class="form-control" required>
		</div>
	</div>

	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
		<div class="col-md-6 col-sm-6">
			<div class="btn-group" data-toggle="buttons">
				<label class="btn btn-secondary" data-toggle-class="btn-primary"
				data-toggle-passive-class="btn-default">
					<input type="radio"  class="join-btn" name="Jenis_Kelamin"
					value="Laki-laki" required>Laki-laki
				</label>
				<label class="btn btn-primary" data-toggle-class="btn-primary"
				data-toggle-passive-class="btn-default">
					<input type="radio"  class="join-btn" name="Jenis_Kelamin" value="Perempuan" required>Perempuan
				</label>
			</div>
		</div>
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Kelas</label>
		<div class="col-md-6 col-sm-6">
			<select name="Kelas" class="form-control" required>
				<option value="">Pilih Kelas</option>
				<option value="TI.19.B.1">TI.19.B.1</option>
				<option value="TI.19.B.2">TI.19.B.2</option>
				<option value="TI.19.B.3">TI.19.B.3</option>
				<option value="TI.19.B.4">TI.19.B.4</option>
				
			</select>
		</div>
	</div>

	<div class="item form-group">
		<div class="col-md-6 col-sm-6 offset-md-3">
			<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
		</div>
</form>
	</div>