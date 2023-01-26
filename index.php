<?php
  include_once __DIR__ . "/partials/_functions.php";

  $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $numbers = "0123456789";
  $symbols = "!£$%&*#@";
  $haveLetters = $_GET["lettersCheck"] ?? false;
  $haveNumbers = $_GET["numbersCheck"] ?? false;
  $haveSymbos = $_GET["symbolsCheck"] ?? false;
  $characters = getKindOfCharacters($letters, $numbers, $symbols, $haveLetters, $haveNumbers, $haveSymbos);


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

    <fieldset>
      <div>
        <input type="radio" name="repeat" id="repeat" value="true" checked>
        <label for="repeat">Si</label >
      </div>
      <div>
        <input type="radio" name="repeat" id="repeat" value="false">
        <label for="noRepeat">No</label>
      </div>
    </fieldset>

    <div>
      <input type="checkbox" id="letters" name="lettersCheck">
      <label for="lettersCheck">Lettere</label>
    </div>

    <div>
      <input type="checkbox" id="numbers" name="numbersCheck">
      <label for="numbersCheck">Numeri</label>
    </div>

    <div>
      <input type="checkbox" id="symbols" name="symbolsCheck">
      <label for="symbolsCheck">Simboli</label>
    </div>

    <button type="submit">Invia</button>

  </form>
  <?php
    if(isset($_GET["numberLenght"])&& isset($_GET["repeat"])){
      $passwordGenerated = $_GET["repeat"] == "true" ? getRandomPasswordNoRepet($characters, $_GET["numberLenght"]) : getRandomPassword($characters, $_GET["numberLenght"]);
      echo "<div> {$passwordGenerated} </div>";
    }

    if (str_contains($letters, "c")){
      echo "ciao";
    } else {
      echo "finalmente";
    }
  ?>

  </div>
</body>
</html>