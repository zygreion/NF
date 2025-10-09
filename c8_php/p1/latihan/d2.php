<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="POST">
    <label for="">Username</label>
    <input type="text" name="username" id=""><br />

    <label for="">Password</label>
    <textarea name="password" id=""></textarea><br />

    <input type="submit" name="login" value="Simpan">
  </form>

  <?php
  $login = $_POST["login"] ?? null;

  if (isset($login)) {
    // mengambil data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // menampilkan data 
    echo 'Username: ' . $username . '<br/>Password: ' . $password;
  }
  ?>
</body>

</html>