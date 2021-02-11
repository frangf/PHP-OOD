
<html>
<head>
<title>OOD_5: inheritance example</title>
</head>
<body>
<?php
require "person.php";//similar to include
require "student.php";
require "teacher.php";
require "Apprentice.php";

$teacher1=new Teacher('Franki','12345678A',22);//using __construct from Person
$teacher1->setSalary(2200);
$student1=new Apprentice('Francisco','98745612R');
$student1->setStudyField('ASIX');
$student1->setFCTBusinessName('IES Manacor');

echo $teacher1->print();//using method print implemented on Person class
echo $student1->print();//using method print implemented on Student class

 ?>
</body>
</html>
