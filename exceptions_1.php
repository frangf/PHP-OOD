<?php
/*Primera*/
/*function discountCalculation1($discount,$percentage,$price){
  //calculate the final amount after applying the discount and return it
  //considering $discount as a %
if ($percentage!=0){
  $discountCalculation1=($price * $discount)/$percentage;

  return $price - $discountCalculation1;
}
return "El valor de porcentage es 0";
}
echo discountCalculation1(10,0,50);*/


/*Segunda*/
function discountCalculation2($discount,$percentage,$price)
{
    if ($percentage == 0)
        throw new Exception('Percentage es cero.');

    else
        return (($price * $discount)/$percentage);
}
try {
    $discount = 50;
    $percentage = 0;
    $price  = 13;
    echo discountCalculation2($discount,$percentage,$price);
}
catch (Exception $e) {
    echo "S'ha capturat l'excepció: " . $e->getMessage() . "<br>";
}

?>
