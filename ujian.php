<?php

include "koneksi.php";

$database = "ujianphp";

$create = "CREATE DATABASE $database";

// if($koneksi->query($create) === TRUE) {
//     echo "Database $database berhasil dibuat";
// }else{
//     echo "gagal membuat database";
// }

$koneksi->close();

?>