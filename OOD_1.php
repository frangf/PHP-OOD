<HTML>
<head>
<title>OOD_1: Student class: setters and getters</title>
</head>
<body>

<?php
class Student
{
  //Propiedades
var $name;
var $dni;
var $surname_1;
var $surname_2;
var $age;

//Setters

public function setName($name)
{
$this->name=$name;
}

public function setSurname_1($surname_1)
{
$this->surname_1=$surname_1;
}

public function setSurname_2($surname_2)
{
$this->surname_2=$surname_2;
}

public function setAge($age)
{
$this->age=$age;
}

public function setDni($dni)
{
$this->dni=$dni;
}

//Getter

public function getName()
{
return $this->name;
}

public function getSurname_1()
{
return $this->surname_1;
}

public function getSurname_2()
{
return $this->surname_2;
}

public function getAge()
{
return $this->age;
}

public function getDni()
{
return $this->dni;
}

public function print()
{
echo "Name: $this->name <br>";
echo "Surname 1: $this->surname_1 <br>";
echo "Surname 2: $this->surname_2 <br>";
echo "Age: $this->age <br>";
echo "DNI:". $this->getDni(). "<br>";
}

}//end class Student

$alumne1=new Student();//creating object using a default constructor
$alumne1->setName('Francisco');
$alumne1->setSurname_1('Galan');
$alumne1->setSurname_2('Fernandez');
$alumne1->setDni('23344556D');
$alumne1->setAge(22);
$alumne1->print();

?>
</body>
</HTML>
