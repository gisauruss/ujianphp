<?php
include 'koneksi.php';

$id = $_POST['praktek'];
$nama = $_POST['nama'];
$email = $_POST['umur'];
$phone = $_POST['jenis_kelamin'];
$alamat = $_POST['phone'];
$tanggal_lahir = $_POST ['alamat'];

mysqli_query($koneksi, "INSERT INTO praktek VALUES ('$id', '$nama', '$umur', '$phone', '$alamat', '$jenis_kelamin' ) ");

header("location:index.php");
?>