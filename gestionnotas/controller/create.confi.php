<?php
require_once '../controller/sessionController.php';
require_once '../model/connection.php';
echo '<link rel="stylesheet" type="text/css" href="../css/styles.css">';

$nombre_alu=$_REQUEST['nombre'];
$apellido1=$_REQUEST['apellido1'];
$apellido2=$_REQUEST['apellido2'];
$grupo=$_REQUEST['grupo'];
$email_alu=$_REQUEST['email'];
$passwd_alu=$_REQUEST['passwd'];

$query="INSERT INTO alumnos (nom_alu, apellido_pat, apellido_mat, grupo, email, passwd) VALUES ('$nombre_alu','$apellido1','$apellido2','$grupo','$email_alu','$passwd_alu')";

$result = $pdo->prepare($query);
$result->execute();
header('Location: ../view/admin.confi.php');