<?php include('config.php'); ?>
	<center><font size="6"> Tambah Data Nilai </font></center>
	<hr>
	<?php
	if(isset($_POST['submit'])) {
		$NIM = $_POST['NIM'];
		$Nama_Mhs = $_POST['Nama_Mhs'];
		$Pemrograman = $_POST['NilaiPemrograman'];
		$Basis_Data	= $_POST['NilaiBasisData'];
		$RPL = $_POST['NilaiRPL'];
		$Komnas = $_POST['NilaiKomnas'];
		$Predikat_Yudisium = $_POST ['$Predikat_Yudisium'];

		$Jumlah_Nilai = $_POST['NilaiPemrograman']+$_POST['NilaiBasisData']+$_POST['NilaiRPL']+$_POST['NilaiKomnas'];
		$Rata2 = $Jumlah_Nilai/4;		

							if($Rata2 > 80 AND $Rata2 <=100) {
								$Predikat_Yudisium = "A, Sangat Memuaskan"; 
							}
							else if ($Rata2 >= 70 AND $Rata2 <=80) {
								$Predikat_Yudisium = "B, Memuaskan";
							}
							else if ($Rata2 >= 60 AND $Rata2 <70) {
								$Predikat_Yudisium= "C, Cukup Memuaskan";
							}
							else if ($Rata2 >= 50 AND $Rata2 <60) {
								$Predikat_Yudisium = "D, Kurang Memuaskan";
							}
							else {
								$Predikat_Yudisium= "E, Mengulang";
							}

		$cek = mysqli_query($koneksi, "SELECT * FROM nilai WHERE NIM='$NIM'") 
		or die (mysqli_error($koneksi));

		if(mysqli_num_rows($cek) == 0){

			$sql = mysqli_query($koneksi, "INSERT INTO nilai (NIM, Nama_Mhs, NilaiPemrograman, NilaiBasisData, NilaiRPL, NilaiKomnas, Jumlah_Nilai, Rata2, Predikat_Yudisium) VALUES ('$NIM', '$Nama_Mhs', '$Pemrograman', '$Basis_Data', '$RPL', '$Komnas', '$Jumlah_Nilai', '$Rata2', '$Predikat_Yudisium')")
				or die (mysqli_error($koneksi));
				$Predikat_Yudisium = Null;


		if($sql) {
			echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampilnilai";</script>';
		}else {
			echo '<div class="alert alert-warning"> Gagal melakukan proses tambah data. </div>';
		}
		} else {
			echo '<div class="alert alert-warning">Gagal, NIM sudah terdaftar. </div>';
		}
	}
	?>

	<form action="index.php?page=tambahnilai" method="post">
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">NIM</label>
			<div class="col-md-6 col-sm-6">
				<input type="text" name="NIM" class="form-control" size="4" required>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Mahasiswa</label>
			<div class="col-md-6 col-sm-6">
				<input type="text" name="Nama_Mhs" class="form-control" required>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Nilai Pemrograman</label>
			<div class="col-md-6 col-sm-6">
				<input type="text" name="NilaiPemrograman" class="form-control" required>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Nilai Basis Data</label>
			<div class="col-md-6 col-sm-6">
				<input type="text" name="NilaiBasisData" class="form-control" required>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Nilai RPL</label>
			<div class="col-md-6 col-sm-6">
				<input type="text" name="NilaiRPL" class="form-control" required>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Nilai Komputer dan Masyarakat</label>
			<div class="col-md-6 col-sm-6">
				<input type="text" name="NilaiKomnas" class="form-control" required>
			</div>
		</div>
		
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">

				<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
		</div>