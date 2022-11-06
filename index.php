<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Docoment</title>
</head>

<body>
  <form action="" method="post">
    <label for="inputIndex">Masukan Index-nya</label>
    <input type="text" name="inputIndex" id="inputIndex">
    <button type="submit" id="submit" name="submit">Proses</button>
  </form>
  <?php
  if (isset($_POST['submit'])) {
    $array = ['F', 'I', 'K', 'R', 'I', 'A', 'M', 'A', 'R', 'Y', 'A', 'N', 'A'];
    $inputIndex = $_POST['inputIndex'];

    if (array_key_exists($inputIndex, $array)) {
      echo $array[$inputIndex];
    } else {
      echo "index tidak tersedia";
    }
  }
  ?>
</body>

</html>