<?php
$fechaActual = date("d-m-Y");
$horaActual = date("H:i:s");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desmostración PHP</title>
</head>

<header>
    <h1>Demostración de PHP</h1>
</header>
<body>

    <p>Fecha actual: <?php echo htmlspecialchars($fechaActual); ?></p>
    <p>Hora actual: <?php echo htmlspecialchars($horaActual); ?></p>

    <!--htmlspecialchars() es una función de PHP que evita que los carácteres especiales de los datos demostrados-->
    <!--puedan interpretarse como código HTML o JavaScript, ayudando a prevenir XSS.-->

</body>
</html>