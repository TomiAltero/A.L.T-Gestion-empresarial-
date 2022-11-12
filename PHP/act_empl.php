<?php
include("connection.php");
$conn = connect();

$id = $_GET['id'];

$sql = "SELECT ID, Nombre , Edad , Telefono , Mail , Contraseña , Profesion FROM empleados WHERE ID = '$id'";

$executeQuery = mysqli_query($conn , $sql);
$fila = mysqli_fetch_array($executeQuery);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../CSS/style-update.css">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Modificar empleado</h1>
        <hr>
    </div>
        <div>
            <form action="update_dates.php" method="POST">

                <label for="">ID</label>
                <input type="text" name="id" value="<?=$fila['ID']?>" readonly>

                <label for="lblName">Nombre completo</label>
                <input name="name" type="text" value="<?=$fila['Nombre']?>">

                <label for="lblApellido">Edad</label>
                <input name="edad" type="text" value="<?=$fila['Edad']?>">

                <label for="lblUsuario">Telefono</label>
                <input name="telefono" type="text" value="<?=$fila['Telefono']?>">
                
                <label for="lblUsuario">Mail</label>
                <input name="mail" type="text" value="<?=$fila['Mail']?>">
                
                <label for="lblUsuario">Contraseña</label>
                <input name="password" type="text" value="<?=$fila['Contraseña']?>">

                <label for="lblUsuario">Profesion</label>
                <input name="profesion" type="text" value="<?=$fila['Profesion']?>" readonly>

                <input type="submit" value="Modificar">

            </form>
        </div>
</body>
</html>