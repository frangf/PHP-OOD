<?php
class Apprentice extends Student
{
private $FCTBusinessName;

public function set_FCTBusinessName($FCTBusinessName)
{$this->FCTBusinessName=$FCTBusinessName;}
public function get_FCTBusinessName()
{return $this->FCTBusinessName;}

public function print()
{parent::print();
echo 'This apprentice FCT Business company is'.$this->FCTBusinessName.'<br>';}


}
?>
