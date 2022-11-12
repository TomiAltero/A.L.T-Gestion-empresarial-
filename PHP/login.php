<?php
    include("connection.php");
    
    $conn = connect();
    
    $name = $_POST["name"];
    $pass = $_POST["password"];
    $prof = $_POST["select-rol"];

    $sql = "SELECT * FROM empleados WHERE Nombre = '$name' and Contraseña = '$pass' and Profesion = '$prof'";
    $sql_execute = mysqli_query($conn , $sql);

    if(mysqli_num_rows($sql_execute) > 0) {
        if($prof == 'Administrador') {
            header("Location: ./../homepage.html");
        }elseif($prof == 'Comerciante') {
            header("Location: ./../homepagecom.html");
        }elseif($prof == 'RRPP(Relaciones publicas)') {
            header("Location: ./../homepagerh.html");
        }elseif($prof == "Desarrollador") {
            header("Location: ./../homepagedev.html");
        }elseif($prof == 'Marketer') {
            header("Location: homepagemar.html");
        }

    
    }else if(empty($name) or empty($pass)) {
        echo "<script>
        alert('No haz podido ingresar sesion. Haz ingresado datos vacíos');
        location.href = 'login.html';
        </script>";

    }else {
        echo "<script>
        alert('No haz podido iniciar sesion correctamente. Este usuario no existe');
        location.href = 'login.html';
    </script>";
    }                                                                                   


    




?>