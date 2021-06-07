<?php

require '../functions.php';

//ambil id dari url
$id = $_GET['id'];

//query team berdasarkan id
$t = query("SELECT * FROM team WHERE id_team = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Team</title>
</head>

<body>
  <h3>Detail Team</h3>
  <ul>
    <li><img src="<?= $t['foto_team']; ?>" alt=""></li>
    <li>Nomor Induk Karyawan : <?= $t['nik']; ?></li>
    <li>Nama : <?= $t['name_team']; ?></li>
    <li>Alamat : <?= $t['address_team']; ?></li>
    <li>Email : <?= $t['email_team']; ?></li>
    <li>No HP : <?= $t['phone_team']; ?> </li>
    <li><a href="team-edit.php">Ubah</a> | <a href="team-delete.php">Hapus</a></li>
    <li><a href="team.php">Kembali ke Daftar team</a></li>
  </ul>
</body>

</html>