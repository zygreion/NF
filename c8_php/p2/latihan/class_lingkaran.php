<?php
// Nama class biasakan diawali dengan kapital
class Lingkaran
{
  private $jarijari; // property
  const PI = 3.14; // konstanta

  // constructor
  function __construct($r)
  {
    $this->jarijari = $r;
  }

  // method
  function getLuas()
  {
    return self::PI * $this->jarijari * $this->jarijari;
  }

  // method
  function getKeliling()
  {
    return 2 * self::PI * $this->jarijari;
  }
}
