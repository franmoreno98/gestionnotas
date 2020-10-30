<?php
require_once '../model/admin.php';
require_once '../model/adminDAO.php';

    $admin = new Admin($_REQUEST['email'], $_REQUEST['passwd']);
    $AdminDAO = new AdminDAO();
        if($AdminDAO->login($admin)){
            header('Location:../view/admin.confi.php');
        }else {
            header('Location:../view/login.php');
        }
        