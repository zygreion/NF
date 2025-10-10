<?php
// User-defined function | void (tidak mengembalikan nilai)
// Tanpa parameter
function salam()
{
  echo '<br/>Selamat Pagi Sobat-Sobatkuh!';
}

// Dengan parameter
function sapa($kawan)
{
  echo '<br/>Selamat Pagi Sobat ' . $kawan;
}

// Dengan nilai default
function kabar($kawan = 'Budi')
{
  echo '<br/>What\'s up Bro ' . $kawan . '?';
}

// Memanggil function void
salam();

$nama = 'Deden';
sapa($nama);

kabar();

kabar('Ahmad');

$siswa = 'Alex';
kabar($siswa);
