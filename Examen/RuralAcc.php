<?php
define('TIPUS_ACTIVITATS',array('senderisme','equitació','ciclisme'));

class RuralAcc extends Accommodation
{
Const INST_AIRE_LLIURE = array('jardi','muntanya','platja');

private $orgActivitats;
private $instAireLliure;

protected function set_orgActivitats($orgActivitats)
{$this->orgActivitats=$orgActivitats;}
protected function get_orgActivitats()
{return $this->orgActivitats;}

protected function set_instAireLliure($instAireLliure)
{$this->instAireLliure=$instAireLliure;}
protected function get_instAireLliure()
{return $this->instAireLliure;}

public function __construct($orgActivitats,$instAireLliure,$numHabit,$menjador)
{
$this->orgActivitats=$orgActivitats;
$this->instAireLliure=$instAireLliure;
parent::__construct($numHabit,$menjador);
}

public function print()
{
  echo $this->name.'<br>';
  echo $this->dni.'<br><br>';
}
}
?>
