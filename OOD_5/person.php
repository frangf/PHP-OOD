<?php
class Person{

public $name;
public $dni;

public function setname($name)
{
  $this->name=$name;
}

function get_name() {
  return $this->name;
}

public function setDni($dni)
{
  $this->dni=$dni;
}

function get_dni() {
  return $this->dni;
}

public function __construct($name,$dni)
{
$this->name=$name;
$this->dni=$dni;
}
//no podem posar protected ja que ood_5 necessita aquest print
public function print()
{
  echo "<b>Name:</b> $this->name.<br>";
  echo "<b>DNI:</b> $this->dni<br>";
}

}
?>
