<?php
require_once '../controller/sessionController.php';
require_once 'connection.php';
echo '<link rel="stylesheet" type="text/css" href="../css/styles.css">';

echo '<h3>Crear alumno</h3>';

// $result = $pdo->prepare($query);
// $result->setFetchMode(PDO::FETCH_ASSOC);
// $result->execute();

// if($row =$result->fetch()){

echo "<div class='contenedor'>";
echo "<form action='../controller/create.confi.php' method='POST'>";

echo "<label for='fname'>Nombre</label>";
echo "<input type='text' name='nombre' class='femail'>";

echo "<label for='lname'>Primer apellido</label>";
echo "<input type='text' name='apellido1' class='femail'>";

echo "<label for='lname'>Segundo apellido</label>";
echo "<input type='text' name='apellido2' class='femail'>";

echo " <label for='lname'>Email</label>";
echo "<input type='text' name='email' class='femail'>";

echo "<label for='lname'>Grupo</label>";
echo "<input type='text' name='grupo' class='femail'>";

echo "<label for='lname'>Contraseña</label>";
echo "<input type='text' name='passwd' class='femail'>";

//echo "<input type='hidden' name='id' value='{$id}'>";

echo "<input type='submit' class='fenviar' value='Enviar'>";
echo "</form>";
echo "</div>";
//}
