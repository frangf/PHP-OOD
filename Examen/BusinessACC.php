<?php
class BusinessACC extends Accommodation
{
Const SALES = array('reunions','audio visuals','internet','no');

private $sales;

protected function set_sales($sales)
{$this->sales=$sales;}
protected function get_sales()
{return $this->sales;}


public function checkIn(){

  if ($this->numHabit = 0)
    throw new Exception('check-in Error: Hotel complet. Operació no permesa<br>');

  $this->numHabit=--$this->numHabit;
  echo "check-in successful<br>";
}

}
?>
