<?php

include "koneksi.php";

$create = "CREATE TABLE detail (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nomor INT(20) NOT NULL,
    nama VARCHAR(250) NOT NULL,
    nama_boot VARCHAR(250) NOT NULL,
    jadwal_kelas VARCHAR(20) NOT NULL,
    phone INT(13) NOT NULL )";

$koneksi->close();

?>