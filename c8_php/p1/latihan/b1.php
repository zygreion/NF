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
  $totalBelanja = 150000;
  $keterangan = '';

  //struktur kendali
  if ($totalBelanja > 100000) {
    $keterangan = "Selamat $nama! Anda mendapatkan hadiah";
  } else {
    $keterangan = "Terima kasih $nama sudah berbelanja!";
  }
  ?>

  Nama Pelanggan: <?= $nama; ?>
  <br />Total Belanja: Rp. <?= number_format($totalBelanja, 2, ',', '.'); ?>
  <br />Keterangan: <?= $keterangan; ?>

</body>

</html>