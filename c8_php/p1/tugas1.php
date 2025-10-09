<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width<br/>initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="POST">
    <table>
      <tbody>
        <tr>
          <td><label>Nama</label></td>
          <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
          <td><label>Email</label></td>
          <td><input type="email" name="email" required></td>
        </tr>
        <tr>
          <td><label>Nilai</label></td>
          <td><input type="nilai" name="nilai" required></td>
        </tr>

        <tr>
          <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
      </tbody>
    </table>
  </form>

  <br />

  <?php
  if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $nilai = $_POST["nilai"];

    $keterangan = $nilai > 70 ? 'Lulus' : 'Remedial';

    echo "Nama: $nama<br/>Email: $email<br/>Nilai: $nilai<br/><br/>Keterangan: $keterangan";
  }
  ?>
</body>

</html>