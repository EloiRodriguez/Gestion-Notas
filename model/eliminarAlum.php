<?php
    require_once 'notaDAO.php';
    require_once 'alumnoDAO.php';
    
    $id = $_GET['id_modificar_alumno'];
    
    $notaDAO = new NotaDao();
    $notaDAO->eliminarNota($id);

    $alumnoDAO = new AlumnoDao();
    $alumnoDAO->eliminarAlum($id);

    header('Location:../view/zona.admin.php');
0?>