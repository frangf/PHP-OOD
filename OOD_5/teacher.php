<?php
class Teacher extends Person
{
public $salary;

//SETTERS
public function setSalary($salary)
{
$this->salary=$salary;
}

//GETTERS
public function getsalary()
{
  return $this->salary;
}

public function __construct_teacher()
{
    parent::construct();
    echo $this->salary;
}

public function print()
{
    parent::print();
    echo $this->salary.'<br><br>';

}
}
?>
