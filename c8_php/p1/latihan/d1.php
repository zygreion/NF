<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="GET">
    <label for="">Nama</label>
    <input type="text" name="nama" id=""><br />

    <label for="">Alamat</label>
    <textarea name="alamat" id=""></textarea><br />

    <input type="submit" name="proses" value="Simpan">
  </form>

  <?php
  $proses = $_GET["proses"] ?? null;

  if (isset($proses)) {
    // mengambil data
    $nama = $_GET["nama"];
    $alamat = $_GET["alamat"];

    // menampilkan data 
    echo 'Nama: ' . $nama . '<br/>Alamat: ' . $alamat;
  }
  ?>
</body>

</html>