<?php
    include("connection.php");
    $conn = connect();

    $id = $_GET['id'];
    $sql = "DELETE FROM empleados WHERE id = '$id'";

    $sel_execute = mysqli_query($conn , $sql);

    header("Location: empleados_reg.php");
?>
