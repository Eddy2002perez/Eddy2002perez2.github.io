<?php

include("conexion.php");
 session_start();
 
 if($_SERVER["REQUEST_METHOD"] == "POST") {

$Ape_paterno= mysqli_real_escape_string($db,$_POST['Ape_paterno']);
$Ape_materno= mysqli_real_escape_string($db,$_POST['Ape_materno']);
$Nombre_medico= mysqli_real_escape_string($db,$_POST['Nombre_medico']);
$Cedula= mysqli_real_escape_string($db,$_POST['Cedula']);
$Telefono= mysqli_real_escape_string($db,$_POST['Telefono']);

$sql = "INSERT INTO medico (Nombre_medico, Ape_paterno, Ape_materno, Cedula, Telefono) VALUES ('$Nombre_medico', '$Ape_paterno', '$Ape_materno', '$Cedula', $Telefono)";

if(mysqli_query($db,$sql)) {
    echo "<script type='text/javascript'>alert('Guardado Con Exito');</script >";
  header("Location: /recordatorio/registroMedico.php");
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
    <title>REGISTRO MEDICO</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
        <source src="5.mp4" type="video/mp4">
    </video>
    <div class="cap"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <div class="container">
    <center>
    <h1
            style="color: #FFFFFF">REGISTRAR MEDICO
        </h1>
        </center>
        <form action = "" method = "post">
            <center>
                <div class="w-50 p-3">
                <label for="exampleInputApe_paterno" class="form-label" style="color: #FFFFFF"> APELLIDO PATERNO</label>
                    <input name="Ape_paterno" type="text" class="form-control" id="exampleInputApe_paterno" >
                    <label for="exampleInputApe_materno" class="form-label" style="color: #FFFFFF"> APELLIDO MAETERNO</label>
                    <input name="Ape_materno" type="text" class="form-control" id="exampleInputApe_materno" aria-describedby="emailHelp">
                    <label for="exampleInputNombre_medico" class="form-label" style="color: #FFFFFF"> NOMBRE DEL MEDICO</label>
                    <input name="Nombre_medico" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <label for="exampleInputCedula" class="form-label" style="color: #FFFFFF"> CEDULA PROFESIONAL</label>
                    <input name="Cedula" type="text" class="form-control" id="exampleInputCedula" aria-describedby="emailHelp">
                    <label for="exampleInputTelefono" class="form-label" style="color: #FFFFFF"> N° DE TELEFONO</label>
                    <input name="Telefono" type="text" class="form-control" id="exampleInputTelefono" aria-describedby="emailHelp">
                </div>
                <div class="container-sm form-check">
            </center>
            <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit">GUARDAR</button>
            <button class="btn btn-primary" type="button" onclick="window.location.href = 'opciones.html';">REGRESAR</button>
        </form>
        
        </div>
</body>

</html>