<<<<<<< HEAD
<?php
class Student extends Person
{
private $studyField;

public function setStudyField($studyField)
{
  $this->studyField=$studyField;
}

public function getstudyField() {
  return $studyField->studyField;
}

public function print()//overriding print method from parent class Person
{
parent::print();//calling print method from parent class Person
echo "<b>StudyField:</b> $this->studyField.<br>";
}
}
?>
=======
<?php
class Student extends Person
{
private $studyField;

public function setStudyField($studyField)
{
  $this->studyField=$studyField;
}

public function getstudyField() {
  return $studyField->studyField;
}

public function print()//overriding print method from parent class Person
{
parent::print();//calling print method from parent class Person
echo "<b>StudyField:</b> $this->studyField.<br>";
}
}
?>
>>>>>>> Develop-OOD