<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./processes/calculo.proc.php" method="post">
        <p>Total de la cuenta:</p>
        <input type="number" name="cuenta" placeholder="Total de la cuenta...">
        <p>¿Que tal el servicio?</p>
        <select name="servicio">
            <option value="30">30% Excelente</option>
            <option value="20">20% Bueno</option>
            <option value="10" selected>10% Normal</option>
            <option value="5">5% Malo</option>
        </select>
        <p>¿Cuantas personas van a pagar?</p>
        <input type="number" name="personas" placeholder="¿Cuantas personas van a pagar?">
        <br><br>
        <input type="submit" value="Calcular" name="submit">
    </form>
    <?php
    if (isset($_REQUEST["res"])){
        echo "<p>total a pagar</p>";
        echo "<h3>".$_REQUEST['res']." por persona</h3>";
    }
    
    ?>
</body>
</html>