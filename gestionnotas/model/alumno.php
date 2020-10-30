<?php
require_once 'persona.php';

    class Alumno extends Persona{

        private $id_alu;
        
        public function __construct($id_alu){

            $this->id_alu=$id_alu;

        }
        /**
         * Get the value of id_alu
         */ 
        public function getId_alu()
        {
                return $this->id_alu;
        }

        /**
         * Set the value of id_alu
         *
         * @return  self
         */ 
        public function setId_alu($id_alu)
        {
                $this->id_alu = $id_alu;

                return $this;
        }
    }
       