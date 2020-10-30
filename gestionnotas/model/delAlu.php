<?php
    require_once '../model/connection.php';
    require_once '../controller/sessionController.php';

    $id=$_REQUEST['id'];
    $query="DELETE FROM alumnos WHERE id_alu = $id";
    $result = $pdo->prepare($query);
    $result->execute();
    header('Location: ../view/admin.confi.php');
