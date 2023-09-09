<?php
//print_r($_GET);
$id = $_GET['id'];

require("../connection/connection.php");
$query = "SELECT * FROM usuario WHERE id_usuario = $id";
$ejecutar = mysqli_query($connection, $query);
$fila = mysqli_fetch_array($ejecutar);
//echo $fila['nombre']; echo $fila['email']; echo $fila['telefono'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Formulario de Actualizaciones</title>
</head>
<body>

<div class="container h-100 " style="padding-top: 1rem;" >  
        <div class="row justify-content-center align-item-center h-100">
                <div class="cal-12">
                <div class="card">
                <div class="card-body">
        <div><h3 class="row justify-content-center align-item-center h-100">Actualización de Usuario</h3></div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
</div>
    <div class="container mt-2">
        <div class="row justyfi-content-center align-item-center g-2">
        <div class="cal-6">
        <div class="card">
        <div class="card-body">
            
            
            <form action="../function/update.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre Completo</label>
                        <input name="nombre" value="<?php echo $fila['nombre'];?>" type="text" class="form-control">
                </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Correo Electrónico</label>
                        <input name="email" value="<?php echo $fila['email'];?>" type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Teléfono</label> 
                                    <input name="telefono" value="<?php echo $fila['telefono'];?>" type="number" class="form-control">
                            </div>
                            <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Mensaje</label> 
                                    <input name="mensaje" value="<?php echo $fila['mensaje'];?>" type="text" class="form-control text-align: justify;">
    
                        </div>
                            <input type="hidden" name="id" value="<?php echo $fila['id_usuario'];?>">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                </form>
                            </div>
                        </div>
        </div>
                    </div>
            </div>
            
</body>
</html>