<?php 
require 'data/database.php';

if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $titulo = $_POST['titulo'];
    $precio= $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $estacionamiento = $_POST['estacionamiento'];
    

    $sql = "INSERT INTO `departamentos`(`titulo`, `precio`, `descripcion`, `habitaciones`, `estacionamiento`) 
    VALUES ('$titulo','$precio','$descripcion','$habitaciones','$estacionamiento')";
    $resultado = $db->query($sql);
    if($resultado){
        header(('location:inmobiliaria.php'));
    }
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Crear Nuevo Departamento</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo:</label>
                <input type="text" name="titulo" id="titulo" class="form-control">
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="text" name="precio" id="precio" class="form-control">
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion:</label>
                <textarea name="descripcion" id="descripcion" rows="5" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="habitaciones" class="form-label">Habitaciones:</label>
                <input type="text" name="habitaciones" id="habitaciones" class="form-control">
            </div>

            <div class="mb-3">
                <label for="estacionamiento" class="form-label">Estacionamiento:</label>
                <input type="text" name="estacionamiento" id="estacionamiento" class="form-control">
            </div>

            

            <input type="submit" value="Guardar Departamento" class="btn btn-success">
        </form>

    </div>
</body>

</html>