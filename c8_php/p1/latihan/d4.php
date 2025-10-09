<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  // Array numerik
  $buah = ['Apel', 'Pisang', 'Melon'];
  foreach ($buah as $item) {
    echo $item . '<br/>';
  }

  // Array asosiatif
  $hargaBuah = array('Apel' => 10000, 'Pisang' => 5000, 'Jeruk' => 7000);
  foreach ($hargaBuah as $namaBuah => $harga) {
    echo "Harga $namaBuah adalah $harga<br/>";
  }
  ?>
</body>

</html>