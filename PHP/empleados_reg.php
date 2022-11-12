<?php
    include("connection.php");
    $conn = connect();

    $sql = "SELECT * FROM empleados";

    $sql_execute = mysqli_query($conn , $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="./../CSS/style_table.css">
    <title>Document</title>
</head>
<body>

    <div>
        <h1>Empleados registrados</h1>
        <hr>
    </div>

    <table class="table">
    <tr class="first-row">
    <th>ID</th>
    <th>Nombre</th>
    <th>Edad</th>
    <th>Telefono</th>
    <th>Mail</th>
    <th>Contraseña</th>
    <th>Profesion</th>
    <th>Editar</th>
    <th>Eliminar</th>
    </tr>
    <?php
        
        while($row = mysqli_fetch_array($sql_execute)):
    ?>
                <tr>
                    <td class="id-column"><?=$row['ID']?></td>
                    <td><?=$row['Nombre']?></td>
                    <td><?=$row['Edad']?></td>
                    <td><?=$row['Telefono']?></td>
                    <td><?=$row['Mail']?></td>
                    <td><?=$row['Contraseña']?></td>
                    <td><?=$row['Profesion']?></td>
                    <td><a href="act_empl.php?id=<?=$row['ID']?>"><i class="fas fa-edit" id= "icon-update"></i></a></td>
                    <td><a href="delete.php?id=<?=$row['ID']?>"><i class="material-icons">delete</i></a></td>

                </tr>   
                <?php endwhile?>
        </table>




</body>
</html>
