<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  // Belajar variabel
  $namaSiswa = 'Muiz';
  $umur = 22;
  $berat_badan = 42.5;
  $_pekerjaan = 'Mahasiswa';
  $tes = $namaSiswa . $_pekerjaan;

  echo 'Nama Siswa: ' . $namaSiswa;
  echo '<br/>Umur: ' . $umur;
  echo '<br/>Berat Badan 1: ' . $berat_badan . ' kg';
  echo "<br/>Berat Badan 2: $berat_badan kg";
  echo '<br/>Berat Badan 3: $berat_badan kg';
  echo '<br/>Pekerjaan 1: ' . $_pekerjaan;
  print '<br/>Pekerjaan 2: ' . $_pekerjaan;

  ?>

  <br /><br />

  Nama Siswa 1: <?= $namaSiswa ?>
  <br />Nama Siswa 2: <?= $namaSiswa . ' ' . $_pekerjaan ?>
  <br />Umur: <?= $umur ?> tahun
  <br />Berat Badan: <?= $berat_badan; ?> kg
  <br />Pekerjaan: <?= $_pekerjaan; ?>
</body>

</html>