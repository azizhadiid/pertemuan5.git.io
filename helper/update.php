<?php
include 'koneksi.php';
//mengambil Nilai Post

$id_mahasiswa=$_POST['id_mahasiswa'];
$nama_teman=$_POST['nama_teman'];
$nim=$_POST['nim'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$no_wa=$_POST['no_wa'];
$instagram=$_POST['instagram'];

//query 
$query_update="UPDATE `mahasiswa` SET `nama_teman` = '$nama_teman', `nim` = '$nim', `tanggal_lahir` = '$tanggal_lahir',  `jenis_kelamin` = '$jenis_kelamin', `no_wa` = '$no_wa', `instagram` = '$instagram'  WHERE `mahasiswa`.`id_mahasiswa` = '$id_mahasiswa'";

$update=mysqli_query($db,$query_update);

if ($update) {
	header("Location: ../tables.php");
	exit();
}
else{
	echo "gagal <br>";
}

 ?>

<a href="tampil_anggota.php">Tampil Anggota</a>