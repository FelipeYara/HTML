<?php
$x = $_POST["pro1"];
$y = $_POST["pro2"];
$z = $x + $y;
if($z>40000)
{
   $des = $z*0.2;
   $total = $z - $des;
   echo "El valor total es: " .$total;
}else{
   echo "el valor total es:" .$z;
}

?>