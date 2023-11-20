<?php
  $user = "root";
  $pswd = "";
  $db = "mysql:host=localhost;dbname=connexion";
  try {
    $db = new PDO($db, $user, $pswd) or die();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $db;
   
  }catch(PDOException $e) {
    echo "Erreur" .$e->getMessage(). "</br>";
    die();
  }

?>