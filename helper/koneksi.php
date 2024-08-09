<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "pertemuan3database";

$db = mysqli_connect($server, $user, $password, $nama_database);
// apabial koneksi gagal maka akan memunculkan eror
if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>