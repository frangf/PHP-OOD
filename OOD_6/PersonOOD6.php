<?php
class PersonOOD6 extends LivingBeing
{
private $fullName;
//constant classe
public function __construct($fullName,$age){
    $this->fullName = $fullName;

    parent::set_age($age);
    parent::set_status(parent::status[1]);
    parent::set_gender(parent::gender[0]);
    parent::set_eatingCapability(EATING_CAPABILITY[0]);
    parent::set_movingCapability(MOVING_CAPABILITY[1]);
    parent::set_speakingCapability(SPEAKING_CAPABILITY[2]);
}
protected function set_fullName($fullName) {
  $this->fullName=$fullName;}
protected function get_fullName() {
  return $this->fullName;}

public function print()
{
  echo "I'm ". $this->get_fullname();
echo '<br>';
  echo "I have ". $this->get_age()." and";
echo '<br>';
  echo "I can talk a ". $this->get_speakingCapability();
echo '<br>';
  echo "eat ". $this->get_eatingCapability();
  echo " and ". $this->get_movingCapability();
echo '<br>';
  echo "My status is ". $this->get_status();
echo '<br>';
  echo "My gender is ". $this->get_gender();
echo '<br>';
}






}

?>
