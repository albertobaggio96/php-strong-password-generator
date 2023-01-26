<?php 
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Psw</title>
</head>
<body>
 <?php 
 if(!empty($_SESSION["password"])){
  echo $_SESSION["password"];
 }
 ?> 
</body>
</html>