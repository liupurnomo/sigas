<?php
require '../../functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query karyawan berdasarkan id
$m = query("SELECT * FROM karyawan WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail karyawan</title>
</head>

<body>
  <h3>Detail karyawan</h3>
  <ul>
    <li><img src="../../assets/img/<?= $m['gambar']; ?>"></li>
    <li>NIK : <?= $m['nik']; ?></li>
    <li>Nama : <?= $m['nama']; ?></li>
    <li>Email : <?= $m['email']; ?></li>
    <li>phone : <?= $m['phone']; ?></li>
    <li><a href="ubah.php?id=<?= $m['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('apakah anda yakin?');">hapus</a></li>
    <li><a href="index.php">Kembali ke daftar karyawan</a></li>
  </ul>
</body>

</html>