<?php
include('config.php');
?>
	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data</font></center>
		<hr>
		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['Nim'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$Nim = $_GET['Nim'];

			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE Nim='$Nim'")
				or die (mysqli_error($koneksi));

			//jika hasil query = 0 maka akan muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data da menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>
		
		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$Nama_Mhs			= $_POST['Nama_Mhs'];
			$Jenis_Kelamin		= $_POST['Jenis_Kelamin'];
			$Kelas				= $_POST['Kelas'];

			$sql = mysqli_query($koneksi, "UPDATE mahasiswa SET Nama_Mhs='$Nama_Mhs', 
				Jenis_Kelamin='$Jenis_Kelamin', Kelas='$Kelas' WHERE Nim='$Nim'")
				or die(mysql_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil mengubah data."); document.location=
				"index.php?page=tampil_mhs";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>
		<form action="index.php?page=edit_mhs&Nim=<?php echo $Nim; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nim</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nim" class="form-control" size="4"
					value="<?php echo $data['Nim']; ?>" readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Mahasiswa</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nama_Mhs" class="form-control" size="4"
					value="<?php echo $data['Nama_Mhs']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelmin</label>
				<div class="col-md-6 col-sm-6">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary"
						data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Jenis_Kelamin"
							value="Laki-Laki" <?php if($data['Jenis_Kelamin'] == 'Laki-Laki')
							{echo 'checked'; } ?> required>Laki-Laki
						</label>
						<label class="btn btn-primary" data-toggle-class="btn-primary"
						data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Jenis_Kelamin"
							value="Perempuan" <?php if($data['Jenis_Kelamin'] == 'Perempuan')
							{echo 'checked'; } ?> required>Perempuan
						</label>
					</div>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kelas</label>
				<div class="col-md-6 col-sm-6">
					<select name="Kelas" class="form-control" required>
						<option value="TI.19.B.1" <?php if($data['Kelas'] == 
						'TI.19.B.1') {echo 'selected'; } ?>>TI.19.B.1</option>
						<option value="TI.19.B.2" <?php if($data['Kelas'] == 
						'TI.19.B.2') {echo 'selected'; } ?>>TI.19.B.2</option>
						<option value="TI.19.B.3" <?php if($data['Kelas'] == 
						'TI.19.B.3') {echo 'selected'; } ?>>TI.19.B.3</option>
						<option value="TI.19.B.4" <?php if($data['Kelas'] == 
						'TI.19.B.4') {echo 'selected'; } ?>>TI.19.B.4</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="index.php?page=tampil_mhs" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>