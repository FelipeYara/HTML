<?php
$tipo = $_POST["tipo"];
$cantidad = $_POST["cantidad"];
$bolsa = $_POST["bolsa"];
    if($cantidad > 0 && $tipo = "1" || $tipo = "2" || $tipo = "3" ){
       if($tipo == "1"){
          if($bolsa == "1"){ 
              $subtotal = 10000 * $cantidad + 500;
              $iva = $subtotal * 0.19;
               $total = $subtotal + $iva;
               echo "subtotal: ".$subtotal."<br>";
               echo "Iva es de $: ". $iva. "<br>";
               echo "Total es de $: ". $total. "<br>";
            }
            else{
                $subtotal = 10000 * $cantidad;
                $iva = $subtotal * 0.19;
                $total = $subtotal + $iva;
                echo "SubTotal es de $:". $subtotal."<br>";
                echo "Iva es de $:". $iva."<br>";
                echo "Total es de $:". $total."<br>";

            }
        }
        else {
           if ($tipo == "2") {
              if ($bolsa == "1") {
        
                  $subtotal = 20000 * $cantidad + 500;
                  $iva = $subtotal * 0.19;
                  $total = $subtotal + $iva;
                  echo "SubTotal es de $:". $subtotal."<br>";
                  echo "Iva es de $:". $iva."<br>";
                  echo "Total es de $:". $total."<br>";
     
                }
               else {
                    $subtotal = 20000 * $cantidad;
                    $iva = $subtotal * 0.19;
                    $total = $subtotal + $iva;
                    echo "SubTotal es de $:". $subtotal."<br>";
                    echo "Iva es de $:". $iva."<br>";
                    echo "Total es de $:". $total."<br>";
                }
           }
           else {
               if ($tipo  == "3") {
                   if ($bolsa == "1") {
                
                    $subtotal = 8000 * $cantidad + 500;
                    $iva = $subtotal * 0.19;
                    $total = $subtotal + $iva;
                    echo "SubTotal es de $:". $subtotal."<br>";
                    echo "Iva es de $:". $iva."<br>";
                    echo "Total es de $:". $total."<br>";
                   }
                   else {
                      $subtotal = 8000 * $cantidad;
                      $iva = $subtotal * 0.19;
                      $total = $subtotal + $iva;
                      echo "SubTotal es de $:". $subtotal."<br>";
                      echo "Iva es de $:". $iva."<br>";
                      echo "Total es de $:". $total."<br>";
                   }
                }
            }
        }
    }
    else {
        echo "Nuemeros negativos son ivalidos";
    }
?>