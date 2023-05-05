<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.1.1.js"></script>
    <script>
        $(document).ready(function() {
            $('#botonCalcular').on('click', function() {
                var campoNumero1 = $('#campoNumero1').val();
                var campoNumero2 = $('#campoNumero2').val();
                var parametrosAjax = { "numero1" : campoNumero1, "numero2" : campoNumero2 };
                $.get('respuestacalculadoraconajax.php', parametrosAjax, function(respuesta) {
                    $('#resultadoAjaxCalculadora').html(respuesta);
                });
            });
        });
    </script>
</head>
<body>
        Nume1: <input type="number" id="campoNumero1"><br>
        Nume2: <input type="number" id="campoNumero2"><br>
        <div id="resultadoAjaxCalculadora"></div>
        <button type="button" id="botonCalcular">Calcular</button>
</body>
</html>