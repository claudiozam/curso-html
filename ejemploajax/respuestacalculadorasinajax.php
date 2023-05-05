<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        sleep(5); //Ejemplo para simular lo lento de internet y del servidor...
        $numero1 = $_REQUEST['numero1'];
        $numero2 = $_REQUEST['numero2'];
        $total =  $numero1 + $numero2;
        echo "El total es: <b>".$total."</b>";
    ?>
</body>
</html>