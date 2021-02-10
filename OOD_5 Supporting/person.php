<?php
class Person
{
public $name;
public $dni;

public function set_name($name)
{$this->name=$name;}
public function get_name()
{return $this->name;}

public function set_dni($dni)
{$this->dni=$dni;}
public function get_dni()
{return $this->dni;}

public function __construct($name,$dni)
{
$this->name=$name;
$this->dni=$dni;
}

public function print()
{
  echo $this->name.'<br>';
  echo $this->dni.'<br><br>';
}
}
?>
