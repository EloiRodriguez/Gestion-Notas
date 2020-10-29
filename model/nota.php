<?php
    require_once 'persona.php';
    class Nota extends Persona{
        private $asignatura;
        private $nota;
        private $id_alum;

        public function __construct($asignatura,$nota,$id_alum)
        {       
                $this->asignatura=$asignatura;
                $this->nota=$nota;
                $this->id_alum=$id_alum;
        }


        /**
         * Get the value of asignatura
         */ 
        public function getAsignatura()
        {
                return $this->asignatura;
        }

        /**
         * Set the value of asignatura
         *
         * @return  self
         */ 
        public function setAsignatura($asignatura)
        {
                $this->asignatura = $asignatura;

                return $this;
        }

        /**
         * Get the value of nota
         */ 
        public function getNota()
        {
                return $this->nota;
        }

        /**
         * Set the value of nota
         *
         * @return  self
         */ 
        public function setNota($nota)
        {
                $this->nota = $nota;

                return $this;
        }


        /**
         * Get the value of id_alum
         */ 
        public function getId_alum()
        {
                return $this->id_alum;
        }

        /**
         * Set the value of id_alum
         *
         * @return  self
         */ 
        public function setId_alum($id_alum)
        {
                $this->id_alum = $id_alum;

                return $this;
        }
    }

?>