<?php
  $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $numbers = "0123456789";
  $symbols = "|\!£$%&/()=?^*§#@°";

  function getKindOfCharacters($arrayoOne = "", $arrayTwo = "", $arrayThree = ""){
    return $arrayoOne.$arrayTwo.$arrayThree;
  }
  function getRandomLetter($array, $number){
    $randomString = "";
    for ($i = 0; $i < $number; $i++){
      $randomString .= $array[rand(0, strlen($array) - 1)];
    }
    return $randomString;
  }
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
      $characters = getKindOfCharacters($letters, $numbers, $symbols);
      $passwordGenerated = getRandomLetter($characters, $_GET["numberLenght"]);
      echo "<div> {$passwordGenerated} </div>";
    }
  ?>

  </div>
</body>
</html>