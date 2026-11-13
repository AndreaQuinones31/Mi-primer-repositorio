<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Registro de productos</title>
</head>
<body>
 <h2>REGISTRO DE TRES PRODUCTOS</h2>
 <!-- Formulario de captura -->
 <form> method="POST" action="">
 
 <?php
 // Ciclo para mostrar tres renglones de captura
 for ($i = 0; $i < 3; $i++) {
 echo "Numero1:";
 echo "<input type='text' name='Numero1[]'>" . " ";

 echo "Numero2:";
 echo "<input type='number' name='Numero2[]'>" . " ";

 
 echo "<br><br>";  }
 ?>
 
 <!-- Botón para guardar y calcular -->
 <button type="submit" name="guardar" value="guardar">
 Guardar y calcular </button>

 <?php
 // Verificar si se presionó el botón Guardar
 if (isset($_POST['guardar'])) {
 
     // Guardar los datos en tres arreglos
     $Numero1 = $_POST['Numero1'];
     $Numero2 = $_POST['Numero2'];
    
    // Declarar los arreglos de resultados
     $Suma = array();
     $Resta = array();
     $Multiplicacion = array();
     $division = array();


 
    // Ciclo para realizar los cálculos
    for ($i = 0; $i < 3; $i++) {
 
    // Calcular Suma
    $Suma[$i] = $Numero1[$i] + $Numero2[$i];
    
     // Calcular Resta
    $Resta[$i] = $Numero1[$i] - $Numero2[$i];
 
     // Calcular Multiplicacion
     $Multiplicacion[$i] = $Numero1[$i] * $Numero2[$i];

     // Calcular Multiplicacion
     $division[$i] = $Numero1[$i] / $Numero2[$i];
 }
 
 
  // Imprimir el arreglo de Suma
 echo "<h3>ARREGLO DE SUMA</h3>";
 
 for ($i = 0; $i < 3; $i++) {
 echo $Suma[$i] . "<br>";
 }
 
 // Imprimir el arreglo de Resta
 echo "<h3>ARREGLO DE RESTA</h3>";
 
 for ($i = 0; $i < 3; $i++) {
 echo round ($Resta[$i], 2) . "<br>";
 }
 // Imprimir el arreglo de Multiplicacion
 echo "<h3>ARREGLO DE MULTIPLICACION</h3>";
 
 for ($i = 0; $i < 3; $i++) {
 echo round ($Multiplicacion[$i], 2) . "<br>";
 
 }

 // Imprimir el arreglo de division
 echo "<h3>ARREGLO DE DIVISION</h3>";
 for ($i = 0; $i < 3; $i++) {
 
 echo  round ($division[$i], 2) . "<br>";
 }
 
 }
 
 ?>
</body>
</html>