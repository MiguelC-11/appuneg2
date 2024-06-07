<?php
 include("/xampp/htdocs/appuneg/backend/php/dbconeccion.php");
 
 if($_SERVER["REQUEST_METHOD"] == "POST" ) {

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
    
    
    $query = mysqli_query($con, "insert into info (nombre, sangre, cedula, lugar_nac, fecha_nac, licencia, estado_civil, peso, altura, direccion, carrera, trabaja, lugar_trabajo) Values
    ('$nombre', '$sangre', '$cedula', '$lugar_nac', '$fecha_nac', '$licencia', '$estado_civil', '$peso', '$altura', '$direccion', '$carrera', '$trabaja', '$lugar_trabajo')");
    
    if($query){
        echo "<script>alert('Creado exitosamente')</script>";
        echo "<script> window.location = 'inf-pers-add-php'; </script> ";
    } else {
        echo "<script>alert('Se encuentra un error revisa nuevamente')</script>";
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
          <h2>informacion personal</h2>
          <form method="POST">
          
          <div class="mb-2">
              <label for="">nombre</label>
              <br>
              <input type="text" class="form-control" name = "nombre" placeholder="ingrese nombre completo" >
          </div>

          <div class="mb-2">
              <input type="text" class="form-control" name = "sangre" placeholder="ingrese grupo sanguineo" >
          </div>

          <div class="mb-2">
              <input type="number" class="form-control" name = "cedula" placeholder="ingrese su cedula" >
          </div>

          <div class="mb-2">
              <input type="text" class="form-control" name = "lugar_nac" placeholder="lugar de nacimiento" >
          </div>

          <div class="mb-2">
              <input type="date" class="form-control" name = "fecha_nac" placeholder="ingrese su fecha de nacimiento" >
          </div>

          <div class="mb-2">
              <input type="text" class="form-control" name = "licencia" placeholder="ingrese su grado de licencia" >
          </div>

          <div class="mb-2">
              <input type="text" class="form-control" name = "estado_civil" placeholder="ingrese su estado civil" >
          </div>

          <div class="mb-2">
              <input type="number" class="form-control" name = "peso" placeholder="ingrese su peso" >
          </div>

          <div class="mb-2">
              <input type="number" class="form-control" name = "altura" placeholder="ingrese su altura" >
          </div>

          <div class="mb-2">
              <input type="text" class="form-control" name = "direccion" placeholder="ingrese su direccion" >
          </div>

          <div class="mb-2">
              <input type="text" class="form-control" name = "carrera" placeholder="ingrese su carrera" >
          </div>

          <div class="mb-2">
              <input type="text" class="form-control" name = "trabaja" placeholder="ingrese su trabajo" >
          </div>

          <div class="mb-2">
              <input type="text" class="form-control" name = "lugar_trabajo" placeholder="ingrese su lugar de trabajo" >
          </div>
          <button class="btn btn-success" type="submit">Crear</button>
          </form>


        </div>





</body>
</html>