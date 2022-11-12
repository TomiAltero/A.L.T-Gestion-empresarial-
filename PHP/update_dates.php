<?php
    include("connection.php");
    $conn = connect();

    $id = $_POST['id'];


    $nombre = $_POST['name'];
    $edad = $_POST['edad'];
    $telef = $_POST['telefono'];
    $mail = $_POST['mail'];
    $pass = $_POST['password'];
    $prof = $_POST['profesion'];

    $sql = "UPDATE empleados SET Nombre = '$nombre' , Edad = '$edad' , Telefono = '$telef' , Mail = '$mail' , Contraseña = '$pass' , Profesion = '$prof' WHERE ID =  '$id'";

    $sql_execute = mysqli_query($conn , $sql);

    header("Location: empleados_reg.php");




?>