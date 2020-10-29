<?php

    class AlumnoDao{
        private $pdo;

        public function __construct(){
            require_once  'connexion.php';
            $this->pdo=$pdo;
        }

        public function insertarAlum($alum){
            $query="INSERT INTO tbl_alumnos (`id_alum`, `nom_alum`, `prim_apellido`, `segun_apellido`, `grupo`, `email_alum`, `password_alum`) VALUES (NULL,?,?,?,?,?,?);";

            /**
             * Recoger datos
             */
            $nom_alum=$alum->getNom_alum();
            $prim_apellido=$alum->getPrim_apellido();
            $segun_apellido=$alum->getSegun_apellido();
            $grupo=$alum->getGrupo();
            $email=$alum->getEmail();
            echo $email;
            $psswd=$alum->getPasswd();
            echo $psswd;

            /**
             * Perparar la sentencia
             */
            $sentencia=$this->pdo->prepare($query);

            /**
             * Substituir las "?"
             */
            $sentencia->bindParam(1,$nom_alum);
            $sentencia->bindParam(2,$prim_apellido);
            $sentencia->bindParam(3,$segun_apellido);
            $sentencia->bindParam(4,$grupo);
            $sentencia->bindParam(5,$email);
            $sentencia->bindParam(6,$psswd);

            /**
             * Ejecutar
             */
            $sentencia->execute();
        }

        public function modificarAlum($alum){
            $query="UPDATE `tbl_alumnos` SET `nom_alum` = '?', `prim_apellido` = '?', `segun_apellido` = '?', `grupo` = '?', `email_alum` = '?', `password_alum` = '?' WHERE `tbl_alumnos`.`nom_alum` = '?';";

            /**
             * Recoger datos
             */
            $nom_alum=$alum->getNom_alum();
            $prim_apellido=$alum->getPrim_apellido();
            $segun_apellido=$alum->getSegun_apellido();
            $grupo=$alum->getGrupo();
            $email=$alum->getEmail();
            $psswd=$alum->getPasswd();
            /**
             * Perparar la sentencia
             */
            $sentencia=$this->pdo->prepare($query);

            /**
             * Substituir las "?"
             */
            $sentencia->bindParam(1,$nom_alum);
            $sentencia->bindParam(2,$prim_apellido);
            $sentencia->bindParam(3,$segun_apellido);
            $sentencia->bindParam(4,$grupo);
            $sentencia->bindParam(5,$email);
            $sentencia->bindParam(6,$psswd);

            /**
             * Ejecutar
             */
            $sentencia->execute();

        }

        public function eliminarAlum($id){
            $this->pdo->beginTransaction();
            $query="DELETE FROM `tbl_alumnos` WHERE `tbl_alumnos`.`id_alum` = ?;";
            $id_alum=$id;
            $sentencia=$this->pdo->prepare($query);
            $sentencia->bindParam(1,$id_alum);
            $sentencia->execute();
            $this->pdo->commit();
        }
    }

?>