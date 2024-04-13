<?php

// Función para sumar dos números
function sumar($a, $b) {
  return $a + $b;
}

// Función para restar dos números
function restar($a, $b) {
  return $a - $b;
}

// Función para multiplicar dos números
function multiplicar($a, $b) {
  return $a * $b;
}

// Función para dividir dos números
function dividir($a, $b) {
  return $a / $b;
}

// Procesar la solicitud del usuario
if (isset($_POST['operacion'])) {
  $operacion = $_POST['operacion'];
  $a = $_POST['a'];
  $b = $_POST['b'];

  switch ($operacion) {
    case 'sumar':
      $resultado = sumar($a, $b);
      break;
    case 'restar':
      $resultado = restar($a, $b);
      break;
    case 'multiplicar':
      $resultado = multiplicar($a, $b);
      break;
    case 'dividir':
      $resultado = dividir($a, $b);
      break;
  }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Calculadora simple</title>
</head>
<body>
  <h1>Calculadora simple</h1>
  <form method="post">
    <input type="hidden" name="operacion" value="sumar">
    Primer número: <input type="number" name="a"><br>
    Segundo número: <input type="number" name="b"><br>
    <input type="submit" value="Sumar">
  </form>
  <br>
  <form method="post">
    <input type="hidden" name="operacion" value="restar">
    Primer número: <input type="number" name="a"><br>
    Segundo número: <input type="number" name="b"><br>
    <input type="submit" value="Restar">
  </form>
  <br>
  <form method="post">
    <input type="hidden" name="operacion" value="multiplicar">
    Primer número: <input type="number" name="a"><br>
    Segundo número: <input type="number" name="b"><br>
    <input type="submit" value="Multiplicar">
  </form>
  <br>
  <form method="post">
    <input type="hidden" name="operacion" value="dividir">
    Primer número: <input type="number" name="a"><br>
    Segundo número: <input type="number" name="b"><br>
    <input type="submit" value="Dividir">
  </form>

  <?php
  if (isset($resultado)) {
    echo "El resultado es: " . $resultado;
  }
  ?>
</body>
</html>
