<?php
 include("/xampp/htdocs/appuneg/backend/php/dbconeccion.php");
 
 if($_SERVER["REQUEST_METHOD"] == "POST" ) {
     $id = $_GET['id'];

    $nombre = $_POST['nombre'];
    $sangre = $_POST['sangre'];
    $cedula = $_POST['cedula'];
    $lugar_nac = $_POST['lugar_nac'];
    $fecha_nac = $_POST['fecha_nac'];
    $licencia = $_POST['licencia'];
    $estado_civil = $_POST['estado_civil'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $direccion = $_POST['direccion'];
    $carrera = $_POST['carrera'];
    $trabaja = $_POST['trabaja'];
    $lugar_trabajo = $_POST['lugar_trabajo'];
    
    
    $query = mysqli_query($con, "update info set nombre ='$nombre', sangre ='$sangre', cedula ='$cedula', lugar_nac ='$lugar_nac', fecha_nac ='$fecha_nac',
    licencia ='$licencia', estado_civil ='$estado_civil', peso ='$peso', altura='$altura', direccion='$direccion', carrera ='$carrera', trabaja='$trabaja', lugar_trabajo ='$lugar_trabajo' Where ID ='$id' ");
    
    if($query){
        echo "<script>alert('datos actualizado exitosamente')</script>";
        echo "<script>  window.location = 'inf-pers-add.php'; </script>";
    } else {
        echo "<script>alert('Ocurrio un error') </script>";
    }

 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!---   <link rel="stylesheet" href="./htdocs/appuneg/frontend/accesos/css/bootstrap.min.css"> -->
    <title>inf</title>
</head>
<body>
        
        <div class="bg-dark d-flex justify-content align-items-center w-100 vh-100">  
   

         <div class="bg-white w-25 rounded p-3">    </div>
          <h2>Actualizacion de personal</h2>
          <form method="POST">
              <?php 
              include("/xampp/htdocs/appuneg/backend/php/dbconeccion.php");
              $id = $_GET['id'];
              $query = mysqli_query($con, "select * from info where ID = '$id'");
              while($row = mysqli_fetch_array($query)){
              ?>
          
          <div class="mb-2">
              <label for="">nombre</label>
              <br>
              <input type="text" class="form-control" value="<?php echo $row['nombre'] ?>" name = "nombre" placeholder="ingrese nombre completo" >
          </div>

          <div class="mb-2">
              <input type="text" class="form-control" value="<?php echo $row['sangre'] ?>" name = "sangre" placeholder="ingrese grupo sanguineo" >
          </div>

          <div class="mb-2">
              <input type="number" class="form-control" value="<?php echo $row['cedula'] ?>" name = "cedula" placeholder="ingrese su cedula" >
          </div>

          <div class="mb-2">
              <input type="text" class="form-control" value="<?php echo $row['lugar_nac'] ?>" name = "lugar_nac" placeholder="lugar de nacimiento" >
          </div>

          <div class="mb-2">
              <input type="date" class="form-control" value="<?php echo $row['fecha_nac'] ?>" name = "fecha_nac" placeholder="ingrese su fecha de nacimiento" >
          </div>

          <div class="mb-2">
              <input type="text" class="form-control" value="<?php echo $row['licencia'] ?>" name = "licencia" placeholder="ingrese su grado de licencia" >
          </div>

          <div class="mb-2">
              <input type="text" class="form-control" value="<?php echo $row['estado_civil'] ?>" name = "estado_civil" placeholder="ingrese su estado civil" >
          </div>

          <div class="mb-2">
              <input type="number" class="form-control" value="<?php echo $row['peso'] ?>" name = "peso" placeholder="ingrese su peso" >
          </div>

          <div class="mb-2">
              <input type="number" class="form-control" value="<?php echo $row['altura'] ?>" name = "altura" placeholder="ingrese su altura" >
          </div>

          <div class="mb-2">
              <input type="text" class="form-control" value="<?php echo $row['direccion'] ?>" name = "direccion" placeholder="ingrese su direccion" >
          </div>

          <div class="mb-2">
              <input type="text" class="form-control" value="<?php echo $row['carrera'] ?>" name = "carrera" placeholder="ingrese su carrera" >
          </div>

          <div class="mb-2">
              <input type="text" class="form-control" value="<?php echo $row['trabaja'] ?>" name = "trabaja" placeholder="ingrese su trabajo" >
          </div>

          <div class="mb-2">
              <input type="text" class="form-control" value="<?php echo $row['lugar_trabajo'] ?>" name = "lugar_trabajo" placeholder="ingrese su lugar de trabajo" >
          </div>
          <?php } ?>
          <button class="btn btn-success" type="submit">Update</button>
          </form>


        </div>





</body>
</html>