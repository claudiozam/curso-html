<?php 
    sleep(5); //Ejemplo para simular lo lento de internet y del servidor...
    $numero1 = $_REQUEST['numero1'];
    $numero2 = $_REQUEST['numero2'];
    $total =  $numero1 + $numero2;
    echo "El total es: <b>".$total."</b>";
?>