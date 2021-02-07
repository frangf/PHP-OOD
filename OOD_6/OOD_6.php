<html>
<head>
<title>OOD_6: inheritance exercise</title>
</head>
<body>
<?php
require "LivingBeing.php";
require "PersonOOD6.php";

$person=new PersonOOD6('Francisco',22);

echo $person->print();//using method print implemented on Person class

 ?>
</body>
</html>
