<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Área del Triángulo</title>
</head>
<body>
  <h1>Área del Triángulo</h1>
  <form  action="<?php echo $_SERVER['php_self'] ?>" method="post">
    <label>Base:</label>
    <input type="number" name="base" step="0.0001" required>
    <br>
    <label>Altura:</label>
    <input type="number" name="altura" step="0.0001" required>
    <br>
    <input type="submit" name="calcular" value="Calcular Área">
  </form>
  <?php
      function calcularAreaTriangulo($base, $altura){
        $area = ($base * $altura) / 2 ;
        return $area;
      }

      if(isset($_POST['calcular'])){
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $areaTriangulo = calcularAreaTriangulo($base, $altura);
        echo "El área del triángulo es: " . $areaTriangulo;
      }
?>
</body>
</html>