<?php
require_once '../controller/sessionController.php';
require_once 'connection.php';
echo '<link rel="stylesheet" type="text/css" href="../css/styles.css">';

    $id=$_REQUEST['id'];
    $query="SELECT * FROM alumnos WHERE id_alu = $id";

echo '<h3>Actualizar alumno</h3>';

$result = $pdo->prepare($query);
$result->setFetchMode(PDO::FETCH_ASSOC);
$result->execute();

if($row =$result->fetch()){

echo "<div class='contenedor'>";
echo "<form action='../controller/actu.confi.php' method='POST'>";

echo "<label for='fname'>Nombre</label>";
echo "<input type='text' name='nombre_alu' class='femail' value='{$row["nom_alu"]}'>";

echo "<label for='lname'>Primer apellido</label>";
echo "<input type='text' name='primerApellido' class='femail' value='{$row["apellido_pat"]}'>";

echo "<label for='lname'>Segundo apellido</label>";
echo "<input type='text' name='segundoApellido' class='femail' value='{$row["apellido_mat"]}'>";

echo " <label for='lname'>Email</label>";
echo "<input type='text' name='email' class='femail' value='{$row["email"]}'>";

echo "<label for='lname'>Grupo</label>";
echo "<input type='text' name='grupo' class='femail' value='{$row["grupo"]}'>";

echo "<input type='hidden' name='id' value='{$id}'>";

echo "<input type='submit' class='fenviar' value='Enviar'>";
echo "</form>";
echo "</div>";
}
