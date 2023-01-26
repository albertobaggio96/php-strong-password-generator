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
    }
    return $string;
  }
  function getRandomLetter($array, $number){
    $randomString = "";
    for ($i = 0; $i < $number; $i++){
      $randomString .= $array[rand(0, strlen($array) - 1)];
    }
    return $randomString;
  }