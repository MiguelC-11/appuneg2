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
            <a href="hor-gd.php" class="btn-btn-success" >Agregar</a>
            <table class="table">
                <thead>
                    <th>id</th>
                    <th>personal encargado</th>
                    <th>dia</th>
                    <th>integrantes</th>
                </thead>
                <tbody>
                    <?php
                    include("/xampp/htdocs/appuneg/backend/php/dbconeccion.php");
                    $fetch = mysqli_query($con, "select * from horas_de_gd");
                    $row = mysqli_num_rows($fetch);
                    if($row > 0) {
                        while($r = mysqli_fetch_array($fetch)) {
                             ?>
                             <tr>
                                 <td><?php echo $r['id'] ?> </td>
                                 <td><?php echo $r['pers_eng'] ?> </td>
                                 <td><?php echo $r['dia'] ?> </td>
                                 <td><?php echo $r['integrantes'] ?> </td>

                                 <td> <a href="hor_update.php?id= <?php echo $r['id'] ?>" class="btn btn-sm btn-info">Editar</a>
                                  <a href="hor_delete.php?delid= <?php echo $r['id'] ?>" class="btn btn-ms btn-danger">Borrar </a> </td>
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