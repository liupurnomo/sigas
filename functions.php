<?php

//fungsi untuk mengkoneksikan ke database
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'sigas');
}


//fungsi query untuk perintah menarik data
function query($query)
{

  //memasukkan fungsi koneksi database
  $conn = koneksi();

  //menarik seluruh data dengan fungsi query
  $result = mysqli_query($conn, $query);

  //hanya menarik 1 bari saja
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  //menampilkan data secara baris di tabel database
  $rows = [];

  //pengulangan untuk setiap baris dalam tabel database
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}


//fungsi untuk menambah data
function add($data)
{
  $conn = koneksi();

  $nik = htmlspecialchars($data['nik']);
  $nama = htmlspecialchars($data['name_team']);
  $address = htmlspecialchars($data['address_team']);
  $mail = htmlspecialchars($data['mail_team']);
  $phone = htmlspecialchars($data['phone_team']);

  $query = "INSERT INTO team VALUES (null, '$nik', '$nama', '$address', '$mail', '$phone')";
  mysqli_query($conn, $query);

  mysqli_error($conn);

  mysqli_affected_rows($conn);
}


function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $nik = htmlspecialchars($data['nik']);
  $email = htmlspecialchars($data['email']);
  $phone = htmlspecialchars($data['phone']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
              karyawan
            VALUES
            (null, '$nama', '$nik', '$email', '$phone', '$gambar');
          ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $nik = htmlspecialchars($data['nik']);
  $email = htmlspecialchars($data['email']);
  $phone = htmlspecialchars($data['phone']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE karyawan SET
              nama = '$nama',
              nik = '$nik',
              email = '$email',
              phone = '$phone',
              gambar = '$gambar'
            WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM karyawan
              WHERE 
            nama LIKE '%$keyword%' OR
            nik LIKE '%$keyword%'
          ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
