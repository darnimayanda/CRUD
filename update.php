<?php
include 'koneksi.php';

// tangkap data yg dikirm dari form
$id = $_POST ['id'];
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];
$fakultas=$_POST['fakultas'];
$semester=$_POST['semester'];
$angkatan=$_POST['angkatan'];

//update data ke database 

mysqli_query($koneksi,"update datamahasiswa set nim='$nim', nama='$nama', jurusan='$jurusan', fakultas='$fakultas', semester='$semester', angkatan='$angkatan' where id='$id'");

//kembali ke index.php

header ("location:index.php");

?>