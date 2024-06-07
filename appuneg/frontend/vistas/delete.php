<?php

include("/xampp/htdocs/appuneg/backend/php/dbconeccion.php");

    if(isset($_GET['delid'])) {
        $id = $_GET['delid'];
        $sql = mysqli_query($con , "delete from info Where ID='$id'" );

        if($sql){
            echo "<script>alert('datos eliminado exitosamente')</script>";
            echo "<script>  window.location = 'inf-pers-add.php'; </script>";
        } else {
            echo "<script>alert('Ocurrio un error') </script>";
        }
    }




?>