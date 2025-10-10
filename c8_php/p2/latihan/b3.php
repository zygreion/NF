<?php
// User-defined | return (mengembalikan nilai)
function tambah($a, $b)
{
  $c = $a + $b;
  return $c;
}

// memanggil function
$x = 10;
$y = 20;
echo 'Hasil 50 + 30 = ' . tambah(50, 30);
echo "<br/>Hasil $x + $y = " . tambah($x, $y);
