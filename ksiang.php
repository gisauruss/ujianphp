<?php

include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr style="background-color:bisque; font-weight: 700; color: black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
            <th colspan="6">Data Kelas Siang</th>
        </tr>
        <tr style="background-color:bisque; font-weight: 700; color: black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
            <th width="5%">No</th>
            <th>Nomor Bootcamp</th>
            <th>Nama Peserta</th>
            <th>Nama Bootcamp</th>
            <th>Jadwal Kelas</th>
            <th>Telp</th>
        </tr>

        <?php
            $data = mysqli_query($koneksi, "SELECT * FROM detail WHERE jadwal_kelas = 'siang'");
            while($detail = mysqli_fetch_array($data)) {
                ?>
              <tr>
                    <td><?php print $detail['id'] ?></td>
                    <td><?php print $detail['nomor'] ?></td>
                    <td><?php print $detail['nama'] ?></td>
                    <td><?php print $detail['nama_boot'] ?></td>
                    <td><?php print $detail['jadwal_kelas'] ?></td>
                    <td><?php print $detail['phone'] ?></td>
                </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>