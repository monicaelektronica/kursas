<?php
class Zmogus {
  public $vardas;
  public $pavarde;

  public function labas() {
    return 'Labas, as esu <i>' . $this -> vardas . " " . $this -> pavarde . '</i> <br>';
  }
}

$robertas = new Zmogus();
$tomas = new Zmogus();

$robertas -> vardas = "Robertas";
$robertas -> pavarde = "Robcaster";

$tomas -> vardas = "Tomas";
$tomas -> pavarde = "Tomkevic";

echo $robertas -> labas();
echo $tomas -> labas();
 ?>
