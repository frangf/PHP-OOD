<html>
<head>
<title>OOD_marking_tasck</title>
</head>
<body>
<?php
require "Accommodation.php";
require "RuralAcc.php";
require "BusinessACC.php";


$Rural1=new RuralAcc(10,MENJADOR[0],'Si',RuralAcc::INST_AIRE_LLIURE[2]);

$Business1=new BusinessACC(1,MENJADOR[1]);
$Business1->checkIn();

$Business1->checkIn();

try {

}
catch (Exception $e) {
    echo "Exception message is: " . $e->getMessage() . "<br>";
}
 ?>
</body>
</html>
