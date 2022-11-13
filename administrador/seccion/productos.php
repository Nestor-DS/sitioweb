<?php include("../template/cabecera.php");?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
            <div class="col-md-5">
                <div class="container-fluid row"> 
                    <div class="card-body">

                        <form method="POST" enctype="multipart/form-data">
                            
                            <?php
                                include "../config/bd.php";
                                include "registro_productos.php";
                            ?>

                            <!--Datos del forms-->

                            <div class = "form-group">
                                <label for="txtName">Nombre: </label>
                                <input type="text" class="form-control" name="name">
                            </div>

                            <div class = "form-group">
                                <label for="txtImage">Imagen: </label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            
                            <!--Botones-->
                            <div class="btn-group" role="group" >
                                <button type="submit" class="btn btn-primary" name="agregar" value="ok">Agregar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        

<!--Tabla de contenido-->
            <div class="col-8 p-4">

            <table class="table">


                        <?php
                            $sql=$conexion->query("Select * from libros");

                            while($datos = $sql->fetch_object()){?>

                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Imagen</th>
                                        
                                        <th scope="col"></th>
                                    </tr>
                                    
                                        <tr>
                                            
                                                <td><?= $datos->Id?></td>
                                                <td><?= $datos->name?></td>
                                                <td><?= $datos->image?></td>
                                                <td>
                                                    <a href="">Editar</a>
                                                    <a href="">Eliminar</a>
                                                </td>

                                        </tr>
                                <?php
                            }
                        ?>
                </table>
            </div>
        </div>
    </body>
</html>