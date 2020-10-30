<?php
//require_once 'admin.php';
class AdminDao{
    private $pdo;
    public function __construct(){
        include 'connection.php';
        $this->pdo=$pdo;
    }
    public function login($admin){
        $query = "SELECT * FROM administrador WHERE email=? AND passwd=?";
        $sentencia=$this->pdo->prepare($query);
        $email=$admin->getEmail();
        $passwd=$admin->getPasswd();
        echo $email;
        echo $passwd;
        echo "hola";
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$passwd);
        $sentencia->execute();
       //$result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();
        echo $numRow;
        if($numRow==1){
            //$admin->setId_admin($result['id_admin']);
            session_start();
            $_SESSION['admin']=$admin;
            return true;
        }else {
            return false;
        }
    }
}

?>