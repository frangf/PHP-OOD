<?php
class Apprentice extends Student

{
private $FCTBusinessName;

public function setFCTBusinessName($FCTBusinessName)
{
  $this->FCTBusinessName=$FCTBusinessName;
}

public function getFCTBusinessName()
{
  return $this->FCTBusinessName;
}

public function print()
{
    parent::print();
    echo $this->$FCTBusinessName.'<br><br>';

}






}
?>
