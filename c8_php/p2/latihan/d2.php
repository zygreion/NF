<?php
class Hewan
{
  protected $nama;

  public function __construct($nama)
  {
    $this->nama = $nama;
  }

  public function getNama()
  {
    return $this->nama;
  }
}

class Kucing extends Hewan
{
  public function suara()
  {
    return 'Meow';
  }
}

$kucing = new Kucing('Tom Lembong');
echo $kucing->getNama(); // Output: Tom Lembong
echo $kucing->suara(); // Output: Meow