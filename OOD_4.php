<HTML>
<head>
<title>Currency Converter</title>
</head>
<body>

<?php
  class currency
{
  //PROPIETATS
  var $euros;
  var $pounds;
  var $exchange;

  //SETTERS
  public function seteuros($euros)
  {
    $this->euros=$euros;
  }

  public function setpounds($pounds)
  {
    $this->pounds=$pounds;
  }

  public function setexchange($exchange)
  {
    $this->exchange=$exchange;
  }

  //GETTERS
  public function geteuros()
  {
  return $this->euros;
  }
  public function getpounds()
  {
  return $this->pounds;
  }
  public function getexchange()
  {
  return $this->exchange;
  }

  //PRINTERS
  public function print()
  {
  echo "El euros es : <b> ". $this->geteuros();
  echo '<br>  </b> ';

  echo "<ins>El exchange es: <i> ". $this->getexchange();
  echo '<br> </i> </ins>';

  echo "El pounds es: <b>  ". $this->getpounds();
  echo '<br>  </b> ';
  }

  function __construct($euros,$exchange){
    $this->euros=$euros;
    $this->exchange=$exchange;
  }

function converEurosToPownds(){
    $this->pounds=$this->euros*$this->exchange;
    return $this->pounds;
}
}

$euros=5;
$exchange=0.89;

  $currency1=new currency($euros,$exchange);
  if($exchange>0)
    $currency1->converEurosToPownds();
  else {
    echo "Error";
  }
  /*$currency1->converEurosToPownds();*/
  $currency1->print();
  ?>
</body>
</HTML>
