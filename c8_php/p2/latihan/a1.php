<?php
$fruits = ['Pepaya', 'Mangga', 'Pisang', 'Jambu'];
$fruits[2] = 'Jeruk';
unset($fruits[3]);

// tambah buah baru
$fruits[] = 'Naga';
$fruits[] = 'Apel';
$fruits[] = 'Sawo';

echo '-----cetak key dari array-----';
foreach ($fruits as $id => $fruit) {
  echo '<br/>Key array buah: ' . $id;
}

echo '<br/><br/>';
echo '-----cetak value dari array-----';
foreach ($fruits as $id => $fruit) {
  echo '<br/>Buah: ' . $fruit;
}

echo '<br/><br/>';
echo '-----cetak key dan value dari array-----';
foreach ($fruits as $id => $fruit) {
  echo '<br/>Buah dengan id: ' . $id . ' adalah buah ' . $fruit;
}
