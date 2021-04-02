<?php
  include "koneksi.php";
  $nama  = $_POST['nama'];
  $username  = $_POST['username'];
  $suku  = $_POST['suku'];
  $agama  = $_POST['agama'];
  $kelamin  = $_POST['Kelamin'];
  $mysqli  = "INSERT INTO form (nama, username, suku, agama, jenis_kelamin) VALUES ('$nama', '$username', '$suku', '$agama', '$kelamin')";
  $result  = mysqli_query($conn, $mysqli);
  if ($result) {
    echo "<script>alert('Data berhasil di tambahkan!');location.href='form.php';</script>";
  } else {
    echo "<script>alert('Data gagal di tambahkan!'); location.href='form.php';</script>";
  }
  mysqli_close($conn);
?>