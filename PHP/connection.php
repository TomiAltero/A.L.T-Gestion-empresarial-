<?php
    function connect() {
        $host = "localhost";
        $user = "root";
        $password = "";
        $bdname = "bd_project";

        $connect = mysqli_connect($host , $user , $password);
        
        mysqli_select_db($connect,$bdname);

        return $connect;
    }
?>