<?php

include("conexion.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FK_medico = mysqli_real_escape_string($db, $_POST['FK_medico']);
    $FK_recordatorio = mysqli_real_escape_string($db, $_POST['FK_recordatorio']);

    // Insertar en la tabla "recordatorio"
    $sql = "INSERT INTO recordatorio (FK_medico, FK_recordatorio) VALUES ('$FK_medico', '$FK_recordatorio')";

    if (mysqli_query($db, $sql)) {
        echo "<script type='text/javascript'>alert('Guardado Con Exito');</script>";
        header("Location: /recordatorio/historial.php");
        exit;
    } else {
        echo "<script type='text/javascript'>alert('Error');</script>";
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }

    // Consulta SELECT para obtener los datos guardados
    $selectSql = "SELECT actividad FROM recordatorio WHERE FK_medico = '$FK_medico' AND FK_recordatorio = '$FK_recordatorio'";

    $result = mysqli_query($db, $selectSql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Actividad: " . $row['actividad'] . "<br>";
        }
    } else {
        echo "Error al realizar la consulta: " . mysqli_error($db);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISTORIAL</title>
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
        <source src="8.mp4" type="video/mp4">
    </video>
    <div class="cap"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <div class="container">
<center>
<h1
style="color: #FFFFFF">HISTORIAL
</h1>
</center>
<form action = "" method = "post">

<div class="container">
  <div class="w-70 p-5"> <
                    <label for="exampleInputEmail1" class="form-label"> </label>
                    <input name="Comentario"type="text"class="form-control"id="exampleInputEmail1"aria-describedby="emailHelp">
</div>
<div class="container-sm form-check">
<div class="d-grid gap-2 col-6 mx-auto">
<button class="btn btn-primary" type="submit">CONSULTAR</button>
<button class="btn btn-primary" type="button" onclick="window.location.href = 'opciones.html';">REGRESAR</button>
</form>
</body>
</html>