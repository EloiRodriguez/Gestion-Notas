<?php

    class NotaDao{

        private $pdo;
        public function __construct()
        {
            require_once  'connexion.php';
            $this->pdo=$pdo;
        }

        public function insertarNota($nota1,$nota2,$nota3,$id_alum){

            if (isset($nota1)) {
                $asignatura1 = 'Matematicas';
                if ($nota1 <= 10 && $nota1 >= 0) {
                    $query="INSERT INTO `tbl_notas` (`asignatura`, `num_nota`, `id_alum`) VALUES (?,?,?)";

                    $sentencia=$this->pdo->prepare($query);

                    $sentencia->bindParam(1,$asignatura1);
                    $sentencia->bindParam(2,$nota1);
                    $sentencia->bindParam(3,$id_alum);

                    $sentencia->execute();
                }
            }else{
                $asignatura1 = 'Matematicas';
                $nota1 = '0';

                $query="INSERT INTO `tbl_notas` (`asignatura`, `num_nota`, `id_alum`) VALUES (?,?,?)";

                $sentencia=$this->pdo->prepare($query);

                $sentencia->bindParam(1,$asignatura1);
                $sentencia->bindParam(2,$nota1);
                $sentencia->bindParam(3,$id_alum);

                $sentencia->execute();

            }

            if (isset($nota2)) {
                $asignatura2 = 'Fisica';
                if ($nota2 <= 10 && $nota2 >= 0) {
                    $query="INSERT INTO `tbl_notas` (`asignatura`, `num_nota`, `id_alum`) VALUES (?,?,?)";

                    $sentencia=$this->pdo->prepare($query);

                    $sentencia->bindParam(1,$asignatura2);
                    $sentencia->bindParam(2,$nota2);
                    $sentencia->bindParam(3,$id_alum);

                    $sentencia->execute();
                }
            }else{
                $asignatura2 = 'Fisica';
                $nota2 = '0';

                $query="INSERT INTO `tbl_notas` (`asignatura`, `num_nota`, `id_alum`) VALUES (?,?,?)";

                $sentencia=$this->pdo->prepare($query);

                $sentencia->bindParam(1,$asignatura2);
                $sentencia->bindParam(2,$nota2);
                $sentencia->bindParam(3,$id_alum);

                $sentencia->execute();

            }

            if (isset($nota3)) {
                $asignatura3 = 'Programacion';
                if ($nota3 <= 10 && $nota3 >= 0) {
                    $query="INSERT INTO `tbl_notas` (`asignatura`, `num_nota`, `id_alum`) VALUES (?,?,?)";

                    $sentencia=$this->pdo->prepare($query);

                    $sentencia->bindParam(1,$asignatura3);
                    $sentencia->bindParam(2,$nota3);
                    $sentencia->bindParam(3,$id_alum);

                    $sentencia->execute();
                }
            }else{
                $asignatura3 = 'Programacion';
                $nota3 = '0';

                $query="INSERT INTO `tbl_notas` (`asignatura`, `num_nota`, `id_alum`) VALUES (?,?,?)";

                $sentencia=$this->pdo->prepare($query);

                $sentencia->bindParam(1,$asignatura3);
                $sentencia->bindParam(2,$nota3);
                $sentencia->bindParam(3,$id_alum);

                $sentencia->execute();

            }

        }

        public function eliminarNota($id){
            $this->pdo->beginTransaction();
            /**
             * Borrar nota Matematicas
             */
            $query="DELETE FROM `tbl_notas` WHERE `tbl_notas`.`id_alum` = ?;";
            $id_alum=$id;
            $sentencia=$this->pdo->prepare($query);
            $sentencia->bindParam(1,$id_alum);
            $sentencia->execute();

            $this->pdo->commit();
        }

    }