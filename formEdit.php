<?php
    include 'koneksi.php';
    $id = $_GET['praktek'];
    $data = mysqli_query($koneksi, "SELECT * FROM praktek WHERE praktek='$id'");
    while ($praktek = mysqli_fetch_array($data)){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Pendaftaran Bimbel</h1>

    <form action="edit.php" method="post">

    <input type="hidden" name="praktek" value="<?php print $praktek['praktek'] ?>">
        <label for="">Nama Lengkap Antum</label>
        <br>
        <input type="text" name="nama" value="<?php print $praktek['nama'] ?>">
        <br>

        <label for="">Umur</label>
        <br>
        <input type="number" name="umur" value="<?php print $praktek['umur'] ?>">
        <br>

        <label for="">Jenis kelamin</label>
        <br>
        <input type="text" name="jenis_kelamin" value="<?php print $praktek['jenis_kelamin'] ?>">
        <br>

        <label for="">Nomor Telp</label>
        <br>
        <input type="number" name="phone" value="<?php print $praktek['jenis_kelamin'] ?>">
        <br>

        <label for="">Alamat</label>
        <br>
        <textarea name="alamat"><?php print $praktek['alamat']?></textarea>
        <br>

        <button type="submit">Simpan data</button>
    </form>
</body>
</html>

    <?php
}

?>