<?php

include "koneksi.php";

$create = "CREATE TABLE praktek ( 
    praktek INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(250) NOT NULL, 
    umur INT(10) NOT NULL,
    jenis_kelamin VARCHAR(10) NOT NULL,
    phone INT(13) NOT NULL,
    alamat VARCHAR(250) NOT NULL ) ";

    if($koneksi->query($create) === TRUE) {
        echo "table praktek berhasil dibuat";
    } else {
        echo "gagal membuat table";
    }

    $koneksi->close();

?>