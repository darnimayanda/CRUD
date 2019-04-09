<?php
//koneksi database
include 'koneksi.php';

//ambil data yg dikirim dari form 
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];
$fakultas=$_POST['fakultas'];
$semester=$_POST['semester'];
$angkatan=$_POST['angkatan'];

mysqli_query($koneksi,"insert into datamahasiswa values('','$nim','$nama','$jurusan','$fakultas','$semester','$angkatan')");
//alih halaman ke utama
header("location:index.php");

?>
