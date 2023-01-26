<?php
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