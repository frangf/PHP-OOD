<?php
class Student extends Person
{
private $studyField;

public function set_studyField($studyField)
{$this->studyField=$studyField;}
public function get_studyField()
{return $this->studyField;}

public function __construct($name,$dni,$studyField)
{parent::__construct($name,$dni);
$this->studyField=$studyField;}



public function print()//overriding print method from parent class Person
{
parent::print();//calling print method from parent class Person
echo 'This student is enrolled in '.$this->studyField.'<br>';
}
}
?>
