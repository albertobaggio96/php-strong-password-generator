<?php
  function getKindOfCharacters($arrayoOne, $arrayTwo, $arrayThree, $booleanOne, $booleanTwo, $booleanThree){
    $string = "";
    if($booleanOne){
      $string .= $arrayoOne;
    }
    if($booleanTwo){
      $string .= $arrayTwo;
    }
    if($booleanThree){
      $string .= $arrayThree;
    } else{
      return "Seleziona almeno uno tra i checkbox";
    }
    return $string;
  }
  function getRandomPassword($string, $number){
    $randomString = "";
    $stringLenght = strlen($string);
    $i = 0;
    while ( $i < $number){
      $element = $string[rand(0, $stringLenght- 1)];
      $randomString .= $element;
      $i++;
    }
    return $randomString;
  }

  function getRandomPasswordNoRepet($string, $number,){
    $randomString = "";
    $stringLenght = strlen($string);
    if($stringLenght >= $number){
      $i = 0;
      while ( $i < $number){
        $element = $string[rand(0, $stringLenght- 1)];
        if (!str_contains($randomString, $element)){
          $randomString .= $element;
          $i++;
        }
      }
      return $randomString;
    } else{
      return "Inserisci un numero uguale o inferiore a {$stringLenght}";
    }

  }