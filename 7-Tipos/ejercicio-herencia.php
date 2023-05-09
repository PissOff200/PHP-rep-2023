
<?php
class vehiculo {
    protected $name;

public function __construct($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function drive() {
    echo $this->name . " is driving...\n";
  }
}
  class coche extends vehiculo {
    public function driving() {
      echo $this->name . " is driving an audi...\n";
    }
  }
  class avion extends vehiculo {
    public function flying() {
      echo $this->name . "  is flying a boeing...\n";
    }
  }
  class barco extends vehiculo {
    public function floating() {
      echo $this->name . " is floating a yacht...\n";
    }
  }

  $coche = new coche("Juan");
$avion = new avion("Max");
$barco = new barco("Louie");

echo $coche->getName() . "\n";
$coche->drive();

echo $avion->getName() . "\n";
$avion->drive();

echo $barco->getName() . "\n";
$barco->drive();

$coche->driving();
$avion->flying();
$barco->floating();

?>