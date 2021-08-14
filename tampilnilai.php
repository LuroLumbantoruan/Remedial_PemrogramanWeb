<?php
//memasukkan file config.php
include('config.php');
?>
	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Nilai</font></center>
		<hr>
		<a href="index.php?page=tambahnilai"><button class="btn btn-dark right">Tambah Data</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO.</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Nilai Pemrograman</th>
					<th>Nilai Basis Data</th>
					<th>Nilai RPL</th>
					<th>Nilai Komputer dan Masyarakat</th>
					<th>Jumlah Nilai</th>
					<th>Rata Rata</th>
					<th>Predikat dan Yudisium</th>
					<th>Aksi</th>


				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				
				$sql = mysqli_query($koneksi, "SELECT * FROM nilai ORDER BY NIM DESC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				

				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan	
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['NIM'].'</td>
							<td>'.$data['Nama_Mhs'].'</td>
							<td>'.$data['NilaiPemrograman'].'</td>
							<td>'.$data['NilaiBasisData'].'</td>
							<td>'.$data['NilaiRPL'].'</td>
							<td>'.$data['NilaiKomnas'].'</td>
							<td>'.$data['Jumlah_Nilai'].'</td>
							<td>'.$data['Rata2'].'</td>
							<td>'.$data['Predikat_Yudisium'].'</td>
							<td>
								<a href="delete-nilai.php?NIM='.$data['NIM'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
					//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			</tbody>
		</table>
		</div>
	</div>