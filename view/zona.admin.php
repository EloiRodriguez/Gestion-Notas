<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Zona de Administracion</title>
</head>
<style>
  #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  }

  #customers td, #customers th {
  padding: 8px;
  }

  #customers tr:nth-child(even){background-color: #f2f2f2;}

  #customers tr:hover {background-color: #ddd;}

  #customers th {
  padding-top: 5px;
  padding-bottom: 5px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
  }

  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  }
  th, td {
  padding: 2px;
  text-align: left;    
  }
</style>
<body>
  <?php
    require_once '../controller/sessionController.php';
    require_once '../model/connexion.php';
    $query = "SELECT * FROM tbl_alumnos";
    $sentencia=$pdo->prepare($query);
    $sentencia->execute();
    $result=$sentencia->fetchAll(PDO::FETCH_ASSOC);

    echo "<div style='margin:2% 0 2% 0; box-shadow: 5px 5px 25px #222 inset;'>";
    echo "<div style='padding: 2%;'>";
    echo "<form action='zona.admin.php' method='POST'>";
    echo "<label for='nombre'>Nombre del Alumno</label>";
    echo "<input type='text' id='nom_alum' name='nom_alum' style='margin-right: 2%;' placeholder='Nombre...'>";
    echo "<label for='apellido'>Apellido del Alumno</label>";
    echo "<input type='text' id='prim_apellido' name='prim_apellido' style='margin-right: 2%;' placeholder='Primer Apellido...'>";
    echo "<input type='submit'></input>";
    echo "</form>";
    echo "</div>";
    echo "</div>";


    echo "<a href='../model/insertarAlum.php'><button type='button' style='margin-bottom: 2%;'>Añadir nuevo Alumno</button></a>";
    if (!empty($_POST['nom_alum']) && !empty($_POST['prim_apellido'])) {
      
      $query = "SELECT * FROM tbl_alumnos WHERE nom_alum LIKE '%{$_POST['nom_alum']}%' AND prim_apellido LIKE '%{$_POST['prim_apellido']}%' ";
      $sentencia=$pdo->prepare($query);
      $sentencia->execute();
      $result=$sentencia->fetchAll(PDO::FETCH_ASSOC);

      echo "<table id='customers'>";
      echo "<tr>";
      echo "<td>Numero de Identificacion</td>";
      echo "<td>Nombre</td>";
      echo "<td>Primer Apellido</td>";
      echo "<td>Segundo Apellido</td>";
      echo "<td>Actualizar</td>";
      echo "<td>Borrar</td>";
      echo "</tr>";
        foreach($result as $alumno){
        $id_alum = $alumno['id_alum'];            
        echo "<tr>";
        echo "<td>{$id_alum}</td>";
        echo "<td>{$alumno['nom_alum']}</td>";
        echo "<td>{$alumno['prim_apellido']}</td>";
        echo "<td>{$alumno['segun_apellido']}</td>";
        echo "<td><a href='../model/editarAlum.php?id_modificar_alumno=$id_alum'><button type='button'><span class='material-icons'>settings</span></button></a></td>";
        echo "<td><a href='../model/eliminarAlum.php?id_modificar_alumno=$id_alum'><button type='button'><span class='material-icons'>delete</span></button></a></td>";        
        echo "</tr>";
      }
      echo "</table>";


    }else{

      $query = "SELECT * FROM tbl_alumnos";
      $sentencia=$pdo->prepare($query);
      $sentencia->execute();
      $result=$sentencia->fetchAll(PDO::FETCH_ASSOC);
      echo "<table id='customers'>";
      echo "<tr>";
      echo "<td>Numero de Identificacion</td>";
      echo "<td>Nombre</td>";
      echo "<td>Primer Apellido</td>";
      echo "<td>Segundo Apellido</td>";
      echo "<td>Actualizar</td>";
      echo "<td>Borrar</td>";
      echo "</tr>";
        foreach($result as $alumno){
        $id_alum = $alumno['id_alum'];            
        echo "<tr>";
        echo "<td>{$id_alum}</td>";
        echo "<td>{$alumno['nom_alum']}</td>";
        echo "<td>{$alumno['prim_apellido']}</td>";
        echo "<td>{$alumno['segun_apellido']}</td>";
        echo "<td><a href='../model/editarAlum.php?id_modificar_alumno=$id_alum'><button type='button'><span class='material-icons'>settings</span></button></a></td>";
        echo "<td><a href='../model/eliminarAlum.php?id_modificar_alumno=$id_alum'><button type='button'><span class='material-icons'>delete</span></button></a></td>";
        echo "</tr>";
        }
      echo "</table>";
    }

  ?>
</body>
</html>