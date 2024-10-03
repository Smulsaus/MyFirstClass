<?php
  include "stoel.php";

  // stoel kleur
  $rodeStoel = new Stoel("rood", 50);
  echo "De kleur van de stoel is: " . $rodeStoel->getKleur() . " <br>";
  
  // Zithoogte
  echo "De zithoogte van de stoel is: " . $rodeStoel->getZithoogte() . " cm<br>";

  // Nieuwe zithooghte
  $rodeStoel->verstelZithoogte(60);
  echo "De nieuwe zithoogte van de stoel is: " . $rodeStoel->getZithoogte() . " cm<br>";
?>