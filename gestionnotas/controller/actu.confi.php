<?php
    require_once '../controller/sessionController.php';
    require_once '../model/connection.php';
    //arreglar esto
    $id_alu=$_REQUEST["id"];
    $nombre_alu=$_REQUEST['nombre_alu'];
    $primerapellido=$_REQUEST['primerApellido'];
    $segundoapellido=$_REQUEST['segundoApellido'];
    $email=$_REQUEST['email'];
    $grupo_alu=$_REQUEST['grupo'];

    $query="UPDATE alumnos SET nom_alu='$nombre_alu', apellido_pat='$primerapellido', apellido_mat='$segundoapellido', grupo='$grupo_alu', email='$email' WHERE id_alu=$id_alu";
    $result = $pdo->prepare($query);
    $result->execute();
    header('Location: ../view/admin.confi.php');