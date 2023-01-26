<?php
session_start();
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

<body class="bg-primary">
  <header>
    <h1 class="text-center">Strong Password Generator</h1>
  </header>

  <main>
    <h2 class="text-center">Genera una password sicura</h2>
    <div class="container bg-white p-4">

      <form action="./index.php" method="GET" class="row">
        <label for="number-lenght" class="col-8">Genera una password sicura:</label>
        <input type="number" name="numberLenght" id="number-lenght" class="col-">
        <fieldset class="col-12">
          <div class="row align-items-center">
            <div class="col-8">
              <legend>Consenti ripetizioni di uno o più caratteri:</legend>
            </div>
            <div class="col-4">
              <input type="radio" name="repeat" id="repeat" value="true">
              <label for="repeat">Si</label>
              <input type="radio" name="repeat" id="repeat" value="false" checked>
              <label for="noRepeat">No</label>
            </div>
          </div>
        </fieldset>

        <div class="row">
          <div class="col-8">
            <div>Seleziona i tipi di caratteri:</div>
          </div>
          <div class="col-4 ps-3">
            <div>
              <input type="checkbox" id="letters" name="lettersCheck" checked>
              <label for="lettersCheck">Lettere</label>
            </div>
            
            <div>
              <input type="checkbox" id="numbers" name="numbersCheck" checked>
              <label for="numbersCheck">Numeri</label>
            </div>
            
            <div>
              <input type="checkbox" id="symbols" name="symbolsCheck" checked>
              <label for="symbolsCheck">Simboli</label>
            </div>
          </div>
        </div>
        
        
        <button type="submit" class="col-1 btn btn-primary">Invia</button>
      </form>
    
    <?php
    if (isset($_GET["numberLenght"]) && isset($_GET["repeat"])) {
      $passwordGenerated = $_GET["repeat"] == "true" ? getRandomPasswordNoRepet($characters, $_GET["numberLenght"]) : getRandomPassword($characters, $_GET["numberLenght"]);
      //  echo "<div> {$passwordGenerated} </div>";
      $_SESSION["password"] = $passwordGenerated;
    }
    ?>
    </div>
  </main>
</body>

</html>