<?php
 include("/xampp/htdocs/appuneg/backend/php/dbconeccion.php");
 
 if($_SERVER["REQUEST_METHOD"] == "POST" ) {
     $id = $_GET['id'];
    $pers_eng = $_POST['pers_eng'];
    $dia  = $_POST['dia'];
    $integrantes  = $_POST['integrantes']; 
    
    $query = mysqli_query($con, "update  horas_de_gd set  pers_eng ='$pers_eng', dia ='$dia', integrantes ='$integrantes' Where ID ='$id' ");
    
    if($query){
        echo "<script>alert('datos actualizado exitosamente')</script>";
      echo "<script>  window.location = 'hor_pers_add.php'; </script>";
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
              $query = mysqli_query($con, "select * from horas_de_gd where ID = '$id'");
              while($row = mysqli_fetch_array($query)){
              ?>
          

          <div class="mb-2">
          <span>seleccione al personal</span>
             
             <select name="pers_eng" id="">
                 <option value="sargento">sargento</option>
                 <option value="coronel">coronel</option>
                 <option value="teniente">teniente</option>
             </select>
          </div>

          <div class="mb-2">
          <span>seleccione el dia</span>
            
              <select name="dia" id="">
                  <option value="lunes">lunes</option>
                  <option value="martes">martes</option>
                  <option value="miercoles">miercoles</option>
                  <option value="jueves">jueves</option>
                  <option value="viernes">viernes</option>
                  <option value="sabado">sabado</option>
                  <option value="domingo">domingo</option>
              </select>
          </div>

          <div class="mb-2">
              <input type="text" class="form-control" value="<?php echo $row['integrantes'] ?>" name = "integrantes" placeholder="indique los integrantes" >
          </div>
        
          <?php } ?>
          <button class="btn btn-success" type="submit">Update</button>
          </form>


        </div>





</body>
</html>