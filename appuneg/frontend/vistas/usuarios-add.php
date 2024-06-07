<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="bg-dark d-flex justify-content-center aling-items-center vh-100 w-100">
        <div class="bg-white p-4 w-50 rounded">
            <a href="inf-pers.php" class="btn-btn-success" >Agregar</a>
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Grupo sanguineo</th>
                    <th>cedula</th>
                    <th>lugar de nacimiento</th>
                    <th>fecha de nacimiento</th>
                    <th>licencia</th>
                    <th>estdo civil</th>
                    <th>peso</th>
                    <th>altura</th>
                    <th>direccion</th>
                    <th>carrera</th>
                    <th>trabajo</th>
                    <th>lugar de trabajo</th>
                    <th>Accion</th>

                </thead>
                <tbody>
                    <?php
                    include("/xampp/htdocs/appuneg/backend/php/dbconeccion.php");
                    $fetch = mysqli_query($con, "select * from info");
                    $row = mysqli_num_rows($fetch);
                    if($row > 0) {
                        while($r = mysqli_fetch_array($fetch)) {
                             ?>
                             <tr>
                                 <td><?php echo $r['nombre'] ?> </td>
                                 <td><?php echo $r['sangre'] ?> </td>
                                 <td><?php echo $r['cedula'] ?> </td>
                                 <td><?php echo $r['lugar_nac'] ?> </td>
                                 <td><?php echo $r['fecha_nac'] ?> </td>
                                 <td><?php echo $r['licencia'] ?> </td>
                                 <td><?php echo $r['estado_civil'] ?> </td>
                                 <td><?php echo $r['peso'] ?> </td>
                                 <td><?php echo $r['altura'] ?> </td>
                                 <td><?php echo $r['direccion'] ?> </td>
                                 <td><?php echo $r['carrera'] ?> </td>
                                 <td><?php echo $r['trabaja'] ?> </td>
                                 <td><?php echo $r['lugar_trabajo'] ?> </td>
                                 <td><a href="update.php?id= <?php echo $r['id'] ?>" class="btn btn-sm btn-info">Editar</a>
                                  <a href="delete.php?delid= <?php echo $r['id'] ?>" class="btn btn-ms btn-danger">Borrar </a> </td>
                             </tr>
                             <?php
                        }
                    }
                    ?> 
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>