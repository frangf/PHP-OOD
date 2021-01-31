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

/*public function print()
{
echo "Name: $this->name <br>";
echo "Surname 1: $this->surname_1 <br>";
echo "Surname 2: $this->surname_2 <br>";
echo "Age: $this->age <br>";
echo "DNI:". $this->getDni(). "<br>";
}*/

function __construct( $name,$surname_1,$surname_2,$dni,$age ){
    $this->name = $name;
    $this->surname_1 = $surname_1;
    $this->surname_2 = $surname_2;
    $this->dni = $dni;
    $this->age = $age;
}


}//end class Student

$alumne1=new Student('Francisco','Galan','Fernandez','23344556D',22);
echo "Name: " . $alumne1->getName();
echo "<br>";
echo "Surname 1: " . $alumne1->getSurname_1();
echo "<br>";
echo "Surname 2: " . $alumne1->getSurname_2();
echo "<br>";
echo "DNI: " . $alumne1->getDni();
echo "<br>";
echo "Age: " . $alumne1->getAge();

//creating object using a default constructor
/*$alumne1->setName('Francisco');
$alumne1->setSurname_1('Galan');
$alumne1->setSurname_2('Fernandez');
$alumne1->setDni('23344556D');
$alumne1->setAge(22);
$alumne1->print();*/

?>
</body>
</HTML>
