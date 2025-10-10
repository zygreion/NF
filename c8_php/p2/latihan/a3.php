<?php
$fruits = [
  ['name' => 'Apel', 'color' => 'Red', 'price' => 5000],
  ['name' => 'Mangga', 'color' => 'Kuning', 'price' => 7000],
  ['name' => 'Kiwi', 'color' => 'Hijau', 'price' => 3000],
];

// cetak dengan looping
foreach ($fruits as $fruit) {
  echo 'Nama: ' . $fruit['name']  . ', Warna: ' . $fruit['color'] . ', Harga: ' . $fruit['price'] . '<br/>';
}
