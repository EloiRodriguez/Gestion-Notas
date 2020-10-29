<?php
    require_once 'persona.php';
    class Alumno extends Persona{
        
        private $nom_alum;
        private $prim_apellido;
        private $segun_apellido;
        private $grupo;

        public function __construct($nom_alum,$prim_apellido,$segun_apellido,$grupo,$email,$passwd,$id)
        {
                parent::__construct($email,$passwd,$id);
                $this->nom_alum=$nom_alum; 
                $this->prim_apellido=$prim_apellido;
                $this->segun_apellido=$segun_apellido;
                $this->grupo=$grupo;
        }
        

        /**
         * Get the value of nom_alum
         */ 
        public function getNom_alum()
        {
                return $this->nom_alum;
        }

        /**
         * Set the value of nom_alum
         *
         * @return  self
         */ 
        public function setNom_alum($nom_alum)
        {
                $this->nom_alum = $nom_alum;

                return $this;
        }

        /**
         * Get the value of prim_apellido
         */ 
        public function getPrim_apellido()
        {
                return $this->prim_apellido;
        }

        /**
         * Set the value of prim_apellido
         *
         * @return  self
         */ 
        public function setPrim_apellido($prim_apellido)
        {
                $this->prim_apellido = $prim_apellido;

                return $this;
        }

        /**
         * Get the value of segun_apellido
         */ 
        public function getSegun_apellido()
        {
                return $this->segun_apellido;
        }

        /**
         * Set the value of segun_apellido
         *
         * @return  self
         */ 
        public function setSegun_apellido($segun_apellido)
        {
                $this->segun_apellido = $segun_apellido;

                return $this;
        }

        /**
         * Get the value of grupo
         */ 
        public function getGrupo()
        {
                return $this->grupo;
        }

        /**
         * Set the value of grupo
         *
         * @return  self
         */ 
        public function setGrupo($grupo)
        {
                $this->grupo = $grupo;

                return $this;
        }
    }

?>