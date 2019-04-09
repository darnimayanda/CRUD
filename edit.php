<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Project 1</title>
</head>
<body>
	<div class="judul">
		<h1><b>Sistem Informasi Project Satu</b></h1>
		<h2>Web master 1.0</h2>
	</div>
</br>
<a href="index.php"><< KEMBALI </a>
</br>
</br>
<h3> Edit data</h3>

<?php 
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from datamahasiswa where id='$id'");
while($d = mysqli_fetch_array($data)){
 ?>
<form method="post" action="update.php">
	<table>
		<tr>
			<td>Nim</td>
			<td>
				<input type="hidden" name="id" value="<?php echo $d['id'];?>">
				<input type="text" name="nim" value ="<?php echo $d['nim']; ?>">
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="<?php echo $d['nama'];?>"></td>
		</tr>
<tr>
			<td>Jurusan</td>
			<td><input type="text" name="jurusan" value="<?php echo $d['jurusan'];?>"></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td><input type="text" name="fakultas" value="<?php echo $d['fakultas'];?>"></td>
		</tr>
		<tr>
			<td>Semester</td>
			<td><input type="text" name="semester" value="<?php echo $d['semester'];?>"></td>
		</tr>
		<tr>
			<td>Angkatan</td>
			<td><input type="text" name="angkatan" value="<?php echo $d['angkatan'];?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>
<?php

}
?>

</body>
</html>