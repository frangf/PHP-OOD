<<<<<<< HEAD
<?php
class Apprentice extends Student
{
private $FCTBusinessName;

public function setFCTBusinessName($FCTBusinessName)
{
$this->FCTBusinessName=$FCTBusinessName;
}
public function get_FCTBusinessName() {
  return $this->FCTBusinessName;
}
/*
public function __construct($name,$dni,$FCTBusinessName)
{
  parent::__construct($name,$dni);
  $this->FCTBusinessName=$FCTBusinessName;
}
*/
public function print()
{
parent::print();
echo "<b>FCTBusinessName:</b> $this->FCTBusinessName.<br>";
}


}
?>
=======
<?php
class Apprentice extends Student
{
private $FCTBusinessName;

public function setFCTBusinessName($FCTBusinessName)
{
$this->FCTBusinessName=$FCTBusinessName;
}
public function get_FCTBusinessName() {
  return $this->FCTBusinessName;
}
/*
public function __construct($name,$dni,$FCTBusinessName)
{
  parent::__construct($name,$dni);
  $this->FCTBusinessName=$FCTBusinessName;
}
*/
public function print()
{
parent::print();
echo "<b>FCTBusinessName:</b> $this->FCTBusinessName.<br>";
}


}
?>
>>>>>>> Develop-OOD
