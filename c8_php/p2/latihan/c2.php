<?php
// panggil class_lingkaran dengan require_once
require_once 'class_lingkaran.php';

echo 'Nilai PI = ' . Lingkaran::PI;
$lingkaran1 = new Lingkaran(10);
$lingkaran2 = new Lingkaran(4);

foreach ([$lingkaran1, $lingkaran2] as $key => $lingkaran) {
  $nomor = $key + 1;
  echo "<br/>Luas Lingkaran " . $nomor . " = " . $lingkaran->getLuas();
  echo "<br/>Keliling Lingkaran " . $nomor . " = " . $lingkaran->getKeliling();
}
