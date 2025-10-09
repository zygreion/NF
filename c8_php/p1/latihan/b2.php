<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  // variabel
  $nama = 'Zumi';
  $nilai = 100;

  // ternary
  $keterangan = ($nilai >= 60) ? 'Lulus' : 'Gagal';
  ?>

  Nama Pelanggan: <?= $nama; ?>
  <br />Total Belanja: Rp. <?= number_format($totalBelanja, 2, ',', '.'); ?>
  <br />Keterangan: <?= $keterangan; ?>

</body>

</html>