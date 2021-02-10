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

$teacher1=new Teacher('Rose','12345678A','98');//using __construct from Person
//$teacher1->setSalary(10);
$student1=new Student('Pauline','98765432S','ASIX');//using __construct from Person
//$student1->set_studyField('ASIX');
$apprentice1=new Apprentice('Francisco','8712121','ASIX');
$apprentice1->set_FCTBusinessName('IESManacor');

echo $teacher1->print();//using method print implemented on Person class
echo $student1->print();//using method print implemented on Student class
echo $apprentice1->print();
 ?>
</body>
</html>
