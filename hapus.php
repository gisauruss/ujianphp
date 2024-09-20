<?php

include 'koneksi.php';

$id = $_GET['praktek'];

mysqli_query($koneksi, "DELETE FROM praktek WHERE praktek='$id'");

header("location:index.php");

?>