<?php
    require_once 'persona.php';
    class Admin extends Persona{

        public function __construct($email,$passwd,$id)
        {
            parent::__construct($email,$passwd,$id);
        }

    }

?>