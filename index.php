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
        Data Mahasiswa
    </h1>

    <table border="1">
        <tr
            style="background-color:bisque; font-weight: 700; color: black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
            <th colspan="5"><a href="dlaki.php">data laki laki</a></th>
            <th><a href="dprempuan.php">data perempuan</a></th>
            <th> <a href="form.php">Tambahkan Data</a></th>
        </tr>
        <tr
            style="background-color:bisque; font-weight: 700; color: black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
            <th width="5%">No</th>
            <th>Nama Lengkap</th>
            <th>Umur</th>
            <th>jenis kelamin</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>

        <?php
            $data = mysqli_query($koneksi, "SELECT * FROM praktek");
            while($praktek = mysqli_fetch_array($data)) {
                ?>
        <tr>
            <td><?php print $praktek['praktek'] ?></td>
            <td><?php print $praktek['nama'] ?></td>
            <td><?php print $praktek['umur'] ?></td>
            <td><?php print $praktek['jenis_kelamin'] ?></td>
            <td><?php print $praktek['phone'] ?></td>
            <td><?php print $praktek['alamat'] ?></td>
            <td>
                <button> <a href="formEdit.php?id=<?php print $praktek['praktek']?>">Edit</a> </button>
                <button>  <a href="hapus.php?praktek=<?php print $bimbel['praktek']?>" onclick="return confirm('yak33n mw di h4pu5??')">Delete</a> </button>
                <button> <a href="detaili.php?id=<?php print $praktek['praktek']?>">Detail</a> </button>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>

</html>