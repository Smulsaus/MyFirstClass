<?php

class Stoel {

  // Fields (eigenschappen)
  private $zithoogte;
  private $kleur;

  // Constructor (start van blauwdruk)
  public function __construct($ingevoerdeKleur, $ingevoerdeZithoogte)
  {
    $this->kleur = $ingevoerdeKleur;
    $this->zithoogte = $ingevoerdeZithoogte;
  }

  // Functions (handelingen)
  public function getKleur() {
    return $this->kleur;
  }

  public function getZithoogte() {
    return $this->zithoogte;
  }

  public function verstelZithoogte($versteldeZithoogte) {
    if ($versteldeZithoogte > 0) {
      $this->zithoogte = $versteldeZithoogte;
    } else {
      echo "Zithoogte moet positief zijn.";
    }
  }
}

?>