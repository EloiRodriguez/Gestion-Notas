<?php
    require_once 'alumnoDAO.php';
    
    $id = $_GET['id_modificar_alumno'];

    $alumnoDAO = new AlumnoDao();
    $alumnoDAO->eliminarAlum($id);

    header('Location:../view/zona.admin.php');
?>