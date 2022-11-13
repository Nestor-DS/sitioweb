<?php

    if(!empty($_POST["agregar"])){
        if(!empty($_POST["name"]) and !empty($_FILES["image"])){

            $name=$_POST["name"];
            $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));

            $sql=$conexion->query("INSERT INTO libros (name, image) VALUES ('$name', '$image');");


        }else{
            echo 'div class="alert alert-warning">Alguno de los campos esta vacios</div>';

        }

    }

?>