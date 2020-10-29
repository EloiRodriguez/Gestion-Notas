<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Alumno</title>
</head>
<style>
    div
    {
        width: 200px;
        height: auto;
        padding: 3%;
        margin: 0%;
        border-radius: 3%;
        background-color: #DBE0B3;
    }
    label{
        margin-bottom: 2%;
    }
    input{
        margin-bottom: 1%;
    }

</style>
<body>

    <?php
        require_once 'nota.php';
        require_once 'notaDAO.php';
        require_once 'alumno.php';
        
        if (isset($_POST['nota_mat']) || isset($_POST['nota_fis']) || isset($_POST['nota_pro'])) {

            $id_alum = $_GET['id_modificar_alumno'];
            $nota1=$_POST['nota_mat'];
            $nota2=$_POST['nota_fis'];
            $nota3=$_POST['nota_pro'];
            $notaDAO = new NotaDao();
            $notaDAO->insertarNota($nota1,$nota2,$nota3,$id_alum);

            header('Location:../view/zona.admin.php');
            
        }else{
            require_once 'connexion.php';
            $id = $_GET['id_modificar_alumno'];
            $id_alum = $id;
            echo $id_alum;
            $query="SELECT * FROM tbl_alumnos WHERE id_alum=$id;";
            $sentencia=$pdo->prepare($query);
            $sentencia->execute();        
            $alumno=$sentencia->fetch(PDO::FETCH_ASSOC);

            echo"<div class='formulario'>";

            echo"<h2>Añadir Notas</h2>";

            echo"<form action='editarAlum.php?id_modificar_alumno=$id_alum' method='POST'>";

            echo"<label for='nombre'>Nombre del Alumno</label><br>";
            echo"<input type='text' id='nom_alum' name='nom_alum' value='{$alumno['nom_alum']}' disabled><br>";

            echo"<label for='apellido'>Primer apellido del Alumno</label><br>";
            echo"<input type='text' id='prim_apellido' name='prim_apellido' value='{$alumno['prim_apellido']}' disabled><br>";
            
            echo"<label for='apellido'>Segundo apellido del Alumno</label><br>";
            echo"<input type='text' id='segun_apellido' name='segun_apellido' value='{$alumno['segun_apellido']}' disabled><br>";

            echo"<label for='apellido'>Grupo Clase</label><br>";
            echo"<input type='text' id='grupo' name='grupo' value='{$alumno['grupo']}' disabled><br>";

            echo"<label for='apellido'>Email Alumno</label><br>";
            echo"<input type='email' id='email_alum' name='email_alum' value='{$alumno['email_alum']}' disabled><br>";

            echo"<label for='apellido'>Contraseña Alumno</label><br>";
            echo"<input type='text' id='contr_alum' name='contr_alum' value='{$alumno['password_alum']}' disabled><br>";

            echo"<label for='apellido'>Mates</label><br>";
            echo"<input type='text' id='nota_mat' name='nota_mat' placeholder='Inserta la nota...'><br>";

            echo"<label for='apellido'>Fisica</label><br>";
            echo"<input type='text' id='nota_fis' name='nota_fis' placeholder='Inserta la nota...'><br>";

            echo"<label for='apellido'>Programacion</label><br>";
            echo"<input type='text' id='nota_pro' name='nota_pro' placeholder='Inserta la nota...'><br>";
            echo"<br><br>";
            echo"<input type='submit' value='Añadir nota'>";
            echo"</form>";
            echo"</div>";
        }
        
        
    ?>

    
</body>
</html>