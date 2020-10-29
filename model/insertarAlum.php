<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Insertar Alumno</title>
</head>
<body>

    <div class='formulario'>
            <form action='insertarAlum.php' method='POST'>
                <label for='nombre'>Nombre del Alumno</label><br>
                <input type='text' id='nom_alum' name='nom_alum' placeholder='Nombre...'><br>
                <label for='apellido'>Primer apellido del Alumno</label><br>
                <input type='text' id='prim_apellido' name='prim_apellido' placeholder='Primer Apellido...'><br><br>
                <label for='apellido'>Segundo apellido del Alumno</label><br>
                <input type='text' id='segun_apellido' name='segun_apellido' placeholder='Segundo Apellido...'><br><br>
                <label for='apellido'>Grupo Clase</label><br>
                <input type='text' id='grupo' name='grupo' placeholder='Grupo...'><br><br>
                <label for='apellido'>Email Alumno</label><br>
                <input type='email' id='email_alum' name='email_alum' placeholder='Email...'><br><br>
                <label for='apellido'>Contraseña Alumno</label><br>
                <input type='password' id='contr_alum' name='contr_alum' placeholder='contraseña...'><br><br>
                <input type='submit' value='Crear Alumno Nuevo'>
            </form>
    </div>

    <?php
    

    require_once 'alumno.php';
    require_once 'alumnoDAO.php';
    if (isset($_POST['nom_alum']) && isset($_POST['prim_apellido']) && isset($_POST['segun_apellido']) && isset($_POST['grupo']) && isset($_POST['email_alum']) && isset($_POST['contr_alum'])) {

        $nom_alum=$_POST['nom_alum'];
        $prim_apellido=$_POST['prim_apellido'];
        $segun_apellido=$_POST['segun_apellido'];
        $grupo=$_POST['grupo'];
        $email=$_POST['email_alum'];
        $passwd=$_POST['contr_alum'];

        $alum = new Alumno($nom_alum,$prim_apellido,$segun_apellido,$grupo,$email,$passwd,$id);
        $alumDAO = new AlumnoDao();
        $alumDAO->insertarAlum($alum);

        header('Location:../view/zona.admin.php');
    }else{

    }
?>
</body>
</html>

