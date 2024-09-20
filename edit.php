<?php

include "koneksi.php";

$praktek = $_POST['praktek'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$phone = $_POST['phone'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST ['jenis_kelamin'];

$data = mysqli_query($koneksi, "UPDATE praktek SET nama='$nama', umur='$umur', phone='$phone', alamat='$alamat', jenis_kelamin='$jenis_kelamin' where praktek='$praktek'");

header("location:index.php");

?>