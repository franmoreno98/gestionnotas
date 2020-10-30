<?php
require_once 'persona.php';

    class Admin extends Persona{
        private $id_admin;
       
        public function __construct($email,$passwd){
            parent:: __construct($email,$passwd);
        }
        /**
         * Get the value of id_admin
         */ 
        public function getId_admin()
        {
                return $this->id_admin;
        }

        /**
         * Set the value of id_admin
         *
         * @return  self
         */ 
        public function setId_admin($id_admin)
        {
                $this->id_admin = $id_admin;

                return $this;
        }
    }