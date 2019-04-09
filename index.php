<!DOCTYPE html>
<html>
<head><title> Sistem Informasi Project 1</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h1><b>Sistem Informasi Project Satu</b></h1>
		<h2>Web master 1.0</h2>
	</div>
</br>

<?php
if (isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
	echo "data sudah berhasil diinput";
	}
		else if($pesan =="update"){
		echo "data sudah berhasil diupdate";
	} else if ($pesan == "hapus"){
	echo "data sudah di hapus";
}
	}

?>
</br>
<a class="tombol" href="input.php"> + Tambah Data Baru</a>
<h3>List Data</h3>
<table border="5">
<tr>
	<th>No</th>
	<th>Nim</th>
	<th>Nama</th>
	<th>Jurusan</th>
	<th>Fakultas</th>
	<th>Semester</th>
	<th>Angkatan</th>
	<th>Opsi</th>
</tr>
    <?php
    include 'koneksi.php';
    $nomor=1;
    $data = mysqli_query($koneksi,"select * from datamahasiswa");
		while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $nomor++; ?></td>
		<td><?php echo $d ['nim']; ?></td>
		<td><?php echo $d ['nama']; ?> </td>
		<td><?php echo $d ['jurusan']; ?></td>
		<td><?php echo $d ['fakultas']; ?></td>
		<td><?php echo $d ['semester'];?></td>
		<td><?php echo $d ['angkatan'];?></td>
      <td>
      	<a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>  |  
	 <a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
     </td>
    </tr>
    <?php } ?>
</table>
</body>
</html>