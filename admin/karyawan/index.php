<?php
require '../../functions.php';
$karyawan = query("SELECT * FROM karyawan");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $karyawan = cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar karyawan</title>
</head>

<body>
  <h3>Daftar karyawan</h3>

  <a href="tambah.php">Tambah Data karyawan</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php if (empty($karyawan)) : ?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style: italic;">data karyawan tidak ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>

    <?php $i = 1;
    foreach ($karyawan as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="../../assets/img/<?= $m['gambar']; ?>" width="60"></td>
        <td><?= $m['nama']; ?></td>
        <td>
          <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>