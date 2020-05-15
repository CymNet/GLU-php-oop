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
$pinky->set_name('Pinky');
$inky->set_name('Inky');
$clyde->set_name('Clyde');

echo $blinky->get_name();
echo "<br>";
echo $pinky->get_name();
echo "<br>";
echo $inky->get_name();
echo "<br>";
echo $clyde->get_name();
echo "<br>";

?>
