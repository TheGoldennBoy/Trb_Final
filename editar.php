<?php
require "data/database.php";
$id = $_GET['id'];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo 'enviado por metodo post';
    $titulo = $_POST['titulo'];
    $precio= $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $estacionamiento = $_POST['estacionamiento'];


    $sql = "UPDATE departamentos SET titulo = '$titulo', precio = '$precio ', descripcion = '$descripcion', 
    habitaciones = '$habitaciones', estacionamiento = '$estacionamiento'  
    WHERE id = $id";



$resultado = $db->query($sql);
    if($resultado){
        header('location:inmobiliaria.php');
    }
    exit;
}
$sql="SELECT * FROM departamentos WHERE id = $id";
$resultado = $db->query($sql);
$departamentos = $resultado->fetch();




?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
        crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Modificar al Departamento</h1>
        <form method="POST">
            <div class= "mb-3">
               <label for="titulo" class= "form-label">Titulo:</label>
               <input type="text" name="titulo" id="titulo" class="form-control"
               value="<?php echo $departamentos['titulo'] ?>">
            </div>
            
            <div class= "mb-3">
               <label for="precio" class= "form-label">Precio:</label>
               <input type="text" name="precio" id="precio" class="form-control" 
               value="<?php echo $departamentos['precio']?>">
            </div>

            <div class= "mb-3">
               <label for="descripcion" class= "form-label">Descripcion:</label>
               <textarea type="text" name="descripcion" id="descripcion" class="form-control" 
               value="<?php echo $departamentos['descripcion']?>"></textarea>
            </div>

            <div class= "mb-3">
               <label for="habitaciones" class= "form-label">Habitaciones:</label>
               <input type="text" name="habitaciones" id="habitaciones" class="form-control" 
               value="<?php echo $departamentos['habitaciones'] ?>">
            </div>

            <div class= "mb-3">
               <label for="estacionamiento" class= "form-label">Estacionamiento:</label>
               <input type="text" name="estacionamiento" id="estacionamiento" class="form-control" 
               value="<?php echo $departamentos['estacionamiento'] ?>">
            </div>

            
            <input type="submit" value="Grabar" class="btn btn-primary">
            <a href="index.php" class="btn btn-danger">Cancelar</a>
            
        </form>
    </div>
    
</body>
</html>