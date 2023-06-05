<?php

include("conexion.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $actividad = mysqli_real_escape_string($db, $_POST['actividad']);
  $nombreMedicamento = mysqli_real_escape_string($db, $_POST['nombreMedicamento']);
  $procedimiento = mysqli_real_escape_string($db, $_POST['procedimiento']);
  $fechaHoraInicio = mysqli_real_escape_string($db, $_POST['fechaHoraInicio']);
  $fechaFinal = mysqli_real_escape_string($db, $_POST['fechaFinal']);

  // Obtener la fecha y hora actual en formato "Y-m-d H:i:s"
  $fechaHoraInicioFormatted = date('Y-m-d H:i:s', strtotime($fechaHoraInicio));
  $fechaFinalFormatted = date('Y-m-d', strtotime($fechaFinal));

  $sql = "INSERT INTO recordatorio (actividad, nombreMedicamento, procedimiento, fechaHoraInicio, fechaFinal) VALUES ('$actividad', '$nombreMedicamento', '$procedimiento', '$fechaHoraInicioFormatted', '$fechaFinalFormatted')";

  if (mysqli_query($db, $sql)) {
    echo "<script type='text/javascript'>alert('Guardado Con Exito');</script>";
    header("Location: /recordatorio/recordatorios.php");
  } else {
    echo "<script type='text/javascript'>alert('Error');</script>";
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
  }
  $sql = "INSERT INTO tomamedicamentos (nombreMedicamento,fechaHoraInicio,fechaFinal)  VALUES
 ('$nombreMedicamento', '$fechaHoraInicio','$fechaFinal)";


if(mysqli_query($db,$sql)) {
    echo "<script type='text/javascript'>alert('Guardado Con Exito');</script >";
  header("Location: /recordatorio/opciones.html");
} else {
  echo "<script type='text/javascript'>alert('Error');</script>";
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RECORDATORIO</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

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
    <source src="6.mp4" type="video/mp4">
  </video>
  <div class="cap"></div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <div class="container">
    <center>
      <h1 style="color: #FFFFFF">NUEVO RECORDATORIO
      </h1>
    </center>
    <form action = "" method = "post">
      <center>
        <div class="w-50 p-5">
          <label for="exampleInputEmail1" class="form-label" style="color: #FFFFFF"> ACTIVIDAD</label>
          <input name='actividad' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <label for="exampleInputEmail1" class="form-label" style="color: #FFFFFF"> NOMBRE DEL MEDICAMENTO </label>
          <input name='nombreMedicamento' type="text" class="form-control" id="exampleInputEmail1"
            aria-describedby="emailHelp">
          <label for="exampleInputEmail1" class="form-label" style="color: #FFFFFF"> PROCEDIMIENTO DE MEDICACION</label>
          <input name='procedimiento' type="text" class="form-control" id="exampleInputEmail1"
            aria-describedby="emailHelp">
          
            <div class="w-50 p-2">
            <label for="start" style="color: #FFFFFF"> Inicio:</label>

          <label for="fechaFinal"></label>
          <input name='fechaHoraInicio' id="fechaInicio" type="datetime-local" name="fechaInicio"
            value="2017-06-01T08:30" />
          
            <label for="start" style="color: #FFFFFF"> Final:</label>

          <label for="Finish">:</label>

          <input name='fechaHoraInicio' id="fechaInicio" type="datetime-local" name="fechaInicio"
            value="2017-06-01T08:30" />



          <div class="d-grid gap-3 col-7 mx-auto">
            <button class="btn btn-primary" type="submit">GUARDAR</button>
            <button class="btn btn-primary" type="button"
              onclick="window.location.href = 'opciones.html';">REGRESAR</button>

            <head>



</body>

</html>