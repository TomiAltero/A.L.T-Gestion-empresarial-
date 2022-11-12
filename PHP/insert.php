<?php
    include("connection.php");

    $conn = connect();  

    $id = null;
    $nombre = $_POST['name'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $profesion = $_POST['select-prof'];

    $sql = "INSERT INTO empleados (ID , Nombre , Edad , Telefono , Mail ,  Contraseña , Profesion) 
    VALUES ('$id' , '$nombre' , '$edad' , '$telefono' , '$email' , '$pass' , '$profesion')";



    if(empty($nombre) or empty($edad) or empty($telefono) or empty($email) or empty($pass)) {
        echo "<script>
        alert('No haz podido ingresar sesion. Haz ingresado datos vacíos');
        location.href = 'insert-empl.html';
        </script>";
        exit();

    }

    //Verificacion email: primaera forma de realizarlo
    $verif_mail = (false !== filter_var($email , FILTER_VALIDATE_EMAIL));

    //Verificacion email: Segunda manera de realizarlo

    $verif_emaiL_2 = (false !== strpos($email , "@") 
    and false !== strpos($email , ".com") 
    and false !== strpos($email , "gmail" or "hotmail"));




    if($verif_mail !== true) {
        echo "<script>
            alert('Ingrese un mail correcto');
            location.href = 'insert-empl.html';
        </script>";
        exit();
    }


    if($edad >= 18 or $edad <= 65) {
        
    }else {
        echo "<script>
        alert('No se encuantra en el rago de edad. Revisa los datos');
        location.href = './insert-empl.html';
        </script>";
        exit();
    }

    //Verificacion telefono
    
    $sql_verif_np = "SELECT * FROM empleados WHERE Nombre = '$nombre' and Mail = '$email'";

    $sql_verif_np_execute = mysqli_query($conn , $sql_verif_np);
    if(mysqli_num_rows($sql_verif_np_execute) > 0) {
        echo "<script>
            alert('Este usuario ya existe. Revise bien los datos');
            lcoation.href = 'insert-empl.html';
        </script>";
        exit();
    }

    

    $sql_execute = mysqli_query($conn , $sql);

    header("Location: empleados_reg.php");

    
?>
