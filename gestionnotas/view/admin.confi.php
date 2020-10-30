<?php
require_once '../controller/sessionController.php';
require_once '../model/connection.php';

$query="SELECT id_alu, nom_alu, apellido_pat, apellido_mat FROM alumnos";
//$query2="SELECT id_alu, nom_alu, apellido_pat, apellido_mat FROM alumnos WHERE nom_alu LIKE '%{$_POST['filtro']}%'";

$result = $pdo->prepare($query);
$result->setFetchMode(PDO::FETCH_ASSOC);
$result->execute();
    echo '<link rel="stylesheet" type="text/css" href="../css/styles.css">';
    echo '<form action="../model/crearAlu.php "method="POST"> <input type="submit" class="crear" value="Crear alumno"></form>';

    echo '<table>';
    echo '<tr>';
    echo '<th>Nombre</th>';
    echo '<th>Apellido Paterno</th>';
    echo '<th>Apellido Materno</th>';
    echo '</tr>';

if ($result) {
    while ($fila=$result->fetch()) {
        echo '<tr>';
        echo '<td>'.$fila['nom_alu'].'</td>';
        echo '<td>'.$fila['apellido_pat'].'</td>';
        echo '<td>'.$fila['apellido_mat'].'</td>';
        echo '<td class="btn"><form action="../model/actAlu.php?id='.$fila['id_alu'].'" method="POST"> <input type="submit" class="actu" value="Actualizar"></form></td>';
        echo '<td class="btn"><form action="../model/delAlu.php?id='.$fila['id_alu'].'" method="POST"> <input type="submit" class="delete" value="Borrar"></form></td>';
        echo '</tr>';
    }
}
echo '</table>';
