<?php
include 'koneksi.php';

// Mengambil nilai post
$id_mahasiswa = $_GET['id_mahasiswa'];

// Query
$query_hapus = "DELETE FROM mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'";
$hapus = mysqli_query($db, $query_hapus);

// Cek
if ($hapus) {
    header("Location: ../tables.php");
	exit();
} else {
    echo "Gagal menghapus data: " . mysqli_error($db);
}
?>