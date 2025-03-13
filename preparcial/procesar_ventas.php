<?php
$producto = $_POST["producto"];
$cantidad = $_POST["cantidad"];

if ($producto==1) {
    $op = $cantidad*3000;
}
if ($producto==2) {
    $op = $cantidad*5000;
}
if ($producto==3) {
    $op = $cantidad*10000;
}

$iva = $op *0.19;
$total = $op + $iva;
echo "Subtotal: ".$op."<br>";
echo "iva: ".$iva."<br>";
echo "Total: ".$total."<br>";

?>

