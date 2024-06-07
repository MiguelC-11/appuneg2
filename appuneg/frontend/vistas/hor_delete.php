<?php

include("/xampp/htdocs/appuneg/backend/php/dbconeccion.php");

    if(isset($_GET['delid'])) {
        $id = $_GET['delid'];
        $sql = mysqli_query($con , "delete from horas_de_gd Where ID='$id'" );

        if($sql){
            echo "<script>alert('datos eliminado exitosamente')</script>";
            echo "<script>  window.location = 'hor_pers_add.php'; </script>";
        } else {
            echo "<script>alert('Ocurrio un error') </script>";
        }
    }




?>