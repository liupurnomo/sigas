<?php

require '../functions.php';

$team = query("SELECT * FROM team");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Team</title>
</head>

<body>

  <h3>Daftar Tim</h3>

  <a href="team-add.php">Tambah Team</a>

  <table border="1" cellpadding='10' cellspacing="0">
    <tr>
      <th>#</th>
      <th>Foto</th>
      <th>NIK</th>
      <th>Alamat</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($team as $t) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="<?= $t['foto_team']; ?>" alt="" width="50"></td>
        <td><?= $t['nik']; ?></td>
        <td><?= $t['name_team']; ?></td>
        <td><?= $t['email_team']; ?></td>
        <td><?= $t['phone_team']; ?></td>
        <td><a href="team-detail.php?id=<?= $t['id_team']; ?>">Detail</a> <a href="#">Edit</a> <a href="#">Delete</a></td>
      </tr>
    <?php endforeach; ?>

  </table>
</body>

</html>