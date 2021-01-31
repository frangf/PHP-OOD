<HTML>
<head>
<title>OOD_1: Student class: setters and getters</title>
</head>
<body>

<?php
class CurrencyConverter
{
  //Propiedades
var $Euros;
var $ExchangeRate;
var $Pounds;

//Setters

public function setEuros($Euros)
{
$this->Euros=$Euros;
}

public function setExchangeRate($ExchangeRate)
{
$this->ExchangeRate=$ExchangeRate;
}

public function setPounds($Pounds)
{
$this->Pounds=$Pounds;
}

//Getter
public function getEuros()
{
return $this->Euros;
}

public function getExchangeRate()
{
return $this->ExchangeRate;
}

public function getPounds()
{
return $this->Pounds;
}

public function print()
{
echo "Euros: $this->Euros <br>";
echo "ExchangeRate: $this->ExchangeRate <br>";
echo "Pounds: $this->Pounds <br>";
}

}//end class Student

$alumne1=new CurrencyConverter();//creating object using a default constructor
$alumne1->setEuros('');
$alumne1->setExchangeRate('0.89');
$alumne1->setPounds('');
$alumne1->print();

?>
</body>
</HTML>
