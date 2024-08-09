<?php
include 'koneksi.php'; 
//mengambil nilai post
$nama_teman=$_POST['nama_teman'];
$nim=$_POST['nim'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$no_wa=$_POST['no_wa'];
$instagram=$_POST['instagram'];

//query
$query_simpan="INSERT INTO mahasiswa (nama_teman, nim,tanggal_lahir, jenis_kelamin, no_wa, instagram) 
				values ('$nama_teman','$nim','$tanggal_lahir','$jenis_kelamin', '$no_wa', '$instagram')";
$simpan=mysqli_query($db,$query_simpan);

//cek
if ($simpan) {
	header("Location: ../tables.php");
	exit();
}
else{
	echo "gagal <br>";
}
 ?>