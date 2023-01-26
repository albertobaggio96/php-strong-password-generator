<?php
  include_once __DIR__ . "/partials/_functions.php";

  $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $numbers = "0123456789";
  $symbols = "|\!£$%&/()=?^*§#@°";
  $characters = getKindOfCharacters($letters, $numbers, $symbols);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Genenrator</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <form action="./index.php" method="GET">
    <input type="number" name="numberLenght" id="number-lenght">
    <button type="submit">Invia</button>
  </form>
  <?php
    if(isset($_GET["numberLenght"])){
      $passwordGenerated = getRandomLetter($characters, $_GET["numberLenght"]);
      echo "<div> {$passwordGenerated} </div>";
    }
  ?>

  </div>
</body>
</html>