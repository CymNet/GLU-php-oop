<?php
class Ghost {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$blinky = new Ghost();
$pinky = new Ghost();
$inky = new Ghost();
$clyde = new Ghost();

$blinky->set_name('Blinky');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();

?>
