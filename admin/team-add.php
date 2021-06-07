<?php
require '../functions.php';

// cek apakah tombol add sudah ditekan
if (isset($_POST['add'])) {
  if (add($_POST) > 0) {
    echo "<script>
            alert('data berhasil diaddkan');
            document.location.href = 'team.php';
         </script>";
  } else {
    echo "data gagal diaddkan!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>add Data Team</title>
</head>

<body>
  <h3>Form add Data Tim</h3>

  <form action="" method="post">
    <ul>
      <li>
        <label>
          Nomor Induk Karyawan
          <input type="number" name="nik" autofocus>
        </label>
      </li>
      <li>
        <label>
          Nama
          <input type="text" name="name_team">
        </label>
      </li>
      <li>
        <label>
          Alamat lengkap
          <input type="text" name="address_team">
        </label>
      </li>
      <li>
        <label>
          Email
          <input type="text" name="mail_team">
        </label>
      </li>
      <li><label>
          phone
          <input type="text" name="phone_team">
        </label>
      </li>
      <li>
        <button type="submit" name="add">add Team</button>
      </li>
    </ul>
  </form>
</body>

</html>