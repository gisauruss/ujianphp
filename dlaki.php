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
            <th colspan="6">Data Laki laki</th>
        </tr>
        <tr style="background-color:bisque; font-weight: 700; color: black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
            <th width="5%">No</th>
            <th>Nama Lengkap</th>
            <th>Umur</th>
            <th>jenis kelamin</th>
            <th>No Telepon</th>
            <th>Alamat</th>
        </tr>

        <?php
            $data = mysqli_query($koneksi, "SELECT * FROM praktek WHERE jenis_kelamin = 'L'");
            while($praktek = mysqli_fetch_array($data)) {
                ?>
              <tr>
                    <td><?php print $praktek['praktek'] ?></td>
                    <td><?php print $praktek['nama'] ?></td>
                    <td><?php print $praktek['umur'] ?></td>
                    <td><?php print $praktek['jenis_kelamin'] ?></td>
                    <td><?php print $praktek['phone'] ?></td>
                    <td><?php print $praktek['alamat'] ?></td>
                </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>