<?php

include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pendaftaran bimbel</title>
</head>
<body>
    <h1 style="text-align: center; color: red; font-weight: 600;">
        Detail Data
    </h1> 
   
    <table border="1">
    <tr style="background-color:bisque; font-weight: 700; color: black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
            <th colspan="5"><a href="ksiang.php">kelas siang</a></th>
           
            <th> <a href="kpagi.php">kelas pagi</a></th>
        </tr>
        <tr style="background-color:bisque; font-weight: 700; color: black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
            <th width="5%">No</th>
            <th>Nomor Bootcamp</th>
            <th>Nama Peserta</th>
            <th>Nama Bootcamp</th>
            <th>jadwal kelas</th>
            <th>Telepon</th>
        </tr>

        <?php
            $data = mysqli_query($koneksi, "SELECT * FROM detail");
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