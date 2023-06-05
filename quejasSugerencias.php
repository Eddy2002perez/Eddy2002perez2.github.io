<?php
include("conexion.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Comentario = mysqli_real_escape_string($db, $_POST['Comentario']);
    $ID = mysqli_real_escape_string($db, $_POST['ID']);

    // Insertar en la tabla "quejassugerencias"
    $sql = "INSERT INTO quejassugerencias (Comentario, FK_usuario) VALUES ('$Comentario', '$ID')";

    if (mysqli_query($db, $sql)) {
        echo "<script type='text/javascript'>alert('Guardado Con Exito');</script>";
        header("Location: /recordatorio/quejasSugerencias.php");
        exit;
    } else {
        echo "<script type='text/javascript'>alert('Error');</script>";
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}
?>




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUEJAS Y SUGERENCIAS</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
   video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
</style>
<body>

<video autoplay loop muted>
        <source src="9.mp4" type="video/mp4">
    </video>
    <div class="cap"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <div class="container">
<center>
    <h1
    style="color: #FFFFFF">QUEJAS Y SUGERENCIAS
    </h1></center>
    <form action = "" method = "post">
    <div class="container">
  <div class="w-70 p-5"> <
                    <label for="exampleInputEmail1" class="form-label"> </label>
                    <input name="Comentario"type="text"class="form-control"id="exampleInputEmail1"aria-describedby="emailHelp">
</div>
<div class="container-sm form-check">
<div class="d-grid gap-2 col-6 mx-auto">
<button class="btn btn-primary" type="submit">GUARDAR</button>
<button class="btn btn-primary" type="button" onclick="window.location.href = 'opciones.html';">REGRESAR</button>
</form>
</body>
</html>