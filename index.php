<?php 
	require 'database.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tugas 1</title>
</head>
<body>
	<?php 
		if(isset($_POST['submit'])){
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$password = $_POST['password'];
			$tanggal = $_POST['tanggal'];
			$jk = $_POST['jk'];
			$prodi = $_POST['prodi'];
			$status = $_POST['status'];
			$ket = $_POST['ket'];
			if(isset($_POST['wni'])){
				$wni = $_POST['wni'];
			}else{
				$wni = 'wna';
			}

			$queryinput="INSERT INTO mahasiswa
						VALUES('$nim', 
								'$nama',
								'$password', 
								'$tanggal', 
								'$jk', 
								'$prodi', 
								'$wni',
								'$status',
								'$ket'
							)";
			$hasilqueryinput = mysqli_query($koneksi1, $queryinput);
			if($hasilqueryinput == 1){
				echo "Data mahasiswa $nama berhasil diinput";
			}else{
				echo "Data gagal input";
			}
		}

	else {
	?>
	<form method="post" action="">
		<table>
			<tr>
				<td>
					NIM
				</td>
				<td>
					<input type="text" name="nim">
				</td>
			</tr>
			<tr>
				<td>
					Nama
				</td>
				<td>
					<input type="text" name="nama">
				</td>
			</tr>
			<tr>
				<td>
					Password
				</td>
				<td>
					<input type="Password" name="password">
				</td>
			</tr>
			<tr>
				<td>
					Tanggal Lahir
				</td>
				<td>
					<input type="date" name="tanggal">
				</td>
			</tr>
			<tr>
				<td>
					Jenis Kelamin
				</td>
				<td>
					<input type="radio" name="jk" value="male" id="male">
					<label for="male">Laki Laki</label>
					<input type="radio" name="jk" value="female" id="female">
					<label for="female"> Perempuan </label>
				</td>
			</tr>
			<tr>
				<td>
					Prodi
				</td>
				<td>
					<select name="prodi">
						<option value="kimia">Kimia</option>
						<option value="matematika">Matematika</option>
						<option value="Fisika">Fisika</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Warga Negara Indonesia
				</td>
				<td>
					<input type="checkbox" name="wni" value="wni">
				</td>
			</tr>
			<tr>
				<input type="hidden" name="status" value="aktif">
			</tr>
			<tr>
				<td>
					Keterangan
				</td>
				<td>
					<textarea name="ket" rows="4" cols="50"></textarea>
				</td>
			</tr>
		</table>
		<button type="submit" name="submit">Submit</button>
	</form>
	<?php } ?>
</body>
</html>