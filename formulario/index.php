<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container h-100 " style="padding-top: 1rem;" >  
        <div class="row justify-content-center align-item-center h-100">
                <div class="cal-12">
                <div class="card">
                <div class="card-body">
                <div class="row justify-content-center align-item-center h-100">
                            Pagina Web de Raúl Gómez
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div> 
                    <div class="container h-100" style="padding-top: 1rem;"  > 
                    <div class="row justify-content-center align-item-center h-100">
                        <div class="cal-12 col-sm-12 col-md-3 mb-3 ">
                        <div class="card">
                            <div class="card-body">
                                <form action="./function/insert.php" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nombre Completo</label>
                                    <input name="nombre" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Correo Electrónico</label>
                                    <input name="email" type="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Teléfono</label>
                                    <input name="telefono" type="number" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="cal-12 col-sm-12 col-md-9">
                        <div class="card">
                    <div class="card-body">
                    <div class="table-responsive">
                    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Teléfono</th>
        <th scope="col"> </th>
        <th scope="col"> </th>
    </tr>
    </thead>
    <tbody>
    <?php
    require("./connection/connection.php");
    $query = "SELECT * FROM usuario";
    $ejecutar = mysqli_query($connection, $query);
    $contador = 1;
    while ($fila = mysqli_fetch_array($ejecutar)){
        ?>
    
    <tr>
        <td><?php echo $contador;?></td>
        <td><?php echo $fila['nombre'];?></td>
        <td><?php echo $fila['email'];?></td>
        <td><?php echo $fila['telefono'];?></td>
        <td><a href="./function/update.php">editar</a></td>
        <td><a href="./function/delete.php?id=<?php echo $fila['id_usuario'];?> ">eliminar</a></td>

    </tr>
    <?php $contador++;}?>
    </div>
    </tbody>
</table>
                    </div>
            </div>
                    </div>
                    </div>
                    </div>
    </div>
    

</body>
</html>