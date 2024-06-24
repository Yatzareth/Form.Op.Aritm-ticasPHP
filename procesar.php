<?php
function suma($a, $b) {
    return $a + $b;
}

function resta($a, $b) {
    return $a - $b;
}

function multiplicacion($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if ($b == 0) {
        return "Error: División por cero no permitida.";
    }
    return $a / $b;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    if (is_numeric($num1) && is_numeric($num2)) {
        $num1 = floatval($num1);
        $num2 = floatval($num2);

        switch ($operacion) {
            case 'suma':
                $resultado = suma($num1, $num2);
                break;
            case 'resta':
                $resultado = resta($num1, $num2);
                break;
            case 'multiplicacion':
                $resultado = multiplicacion($num1, $num2);
                break;
            case 'division':
                $resultado = division($num1, $num2);
                break;
            default:
                $resultado = "Operación no válida.";
        }
    } else {
        $resultado = "Error: Asegúrese de que ambos números sean válidos.";
    }
} else {
    $resultado = "Error: Método de solicitud no válido.";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Operación</title>
</head>
<body>
    <h1>Resultado de la Operación</h1>
    <p><?php echo htmlspecialchars($resultado); ?></p>
    <a href="index.html">Volver</a>
</body>
</html>
