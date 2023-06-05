<?php
 include("conexion.php");
 session_start();
 
 if($_SERVER["REQUEST_METHOD"] == "POST") {

$MyNombre= mysqli_real_escape_string($db,$_POST['Nombre']);
$MyApe_paterno= mysqli_real_escape_string($db,$_POST['Ape_paterno']);
$MyApe_materno= mysqli_real_escape_string($db,$_POST['Ape_materno']);
$MyEdad= mysqli_real_escape_string($db,$_POST['Edad']);
$MyCorreo= mysqli_real_escape_string($db,$_POST['Correo']);
$MyContraseña= mysqli_real_escape_string($db,$_POST['Contraseña']);
$MyTelefono= mysqli_real_escape_string($db,$_POST['Telefono']);
$MyEstado= mysqli_real_escape_string($db,$_POST['Estado']);
$MyMunicipio= mysqli_real_escape_string($db,$_POST['Municipio']);

$sql = "INSERT INTO datosusuario (Nombre,Ape_paterno,Ape_materno,Edad,Correo,Contraseña,Telefono,Estado,Municipio)  VALUES
 ('$MyNombre','$MyApe_paterno','$MyApe_materno', '$MyEdad','$MyCorreo', '$MyContraseña','$MyTelefono','$MyEstado','$MyMunicipio')";


if(mysqli_query($db,$sql)) {
    echo "<script type='text/javascript'>alert('Guardado Con Exito');</script >";
  header("Location: /recordatorio/opciones.html");
} else {
  echo "<script type='text/javascript'>alert('Error');</script>";
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
$sql = "INSERT INTO usuario (Correo,Contraseña)  VALUES
 ('$MyCorreo', '$MyContraseña')";


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
    <title>REGISTRO</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <source src="2.mp4" type="video/mp4">
    </video>
    <div class="cap"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <center>
        <h1
        style="color: #FFFFFF">REGISTRO
        </h1>
    </center>
</body>
<div class="container">
    <form action = "" method = "post">
        <center>
            <div class="w-50 p-3">
                <label for="ExampleInputNombre" class="form-label"style="color: #FFFFFF"> NOMBRE</label>
                <input name="Nombre" type="text" class="form-control" id="ExampleInputNombre">

                <label for="ExampleInputApe_paterno" class="form-label"style="color: #FFFFFF"> APELLIDO PATERNO</label>
                <input name="Ape_paterno" type="text" class="form-control" id="ExampleInputApe_paterno">

                <label for="ExampleInputApe_materno" class="form-label"style="color: #FFFFFF"> APELLIDO MATERNO</label>
                <input name="Ape_materno" type="text" class="form-control" id="ExampleInputApe_materno">

                <label for="ExampleInputEstado" class="form-label"style="color: #FFFFFF"> ESTADO</label>
                <input name="Estado" type="text" class="form-control" id="ExampleInputEstado">

                <label for="ExampleInputMunicipio" class="form-label"style="color: #FFFFFF"> MUNICIPIO</label>
                <input name="Municipio" type="text" class="form-control" id="ExampleInputMunicipio">

                <label for="ExampleInputEdad" class="form-label"style="color: #FFFFFF"> EDAD</label>
                <input name="Edad" type="text" class="form-control" id="ExampleInputEdad">

                <label for="ExampleInputCorreo" class="form-label"style="color: #FFFFFF"> CORREO ELECTRONICO</label>
                <input name="Correo" type="email" class="form-control" id="ExampleInputCorreo" aria-describedby="emailHelp">

                <label for="ExampleInputContraseña" class="form-label"style="color: #FFFFFF"> CONTRASEÑA</label>
                <input name= "Contraseña" type="text" class="form-control" id="ExampleInputContraseña">

                <label for="ExampleInputTelefono" class="form-label"style="color: #FFFFFF"> N° DE TELEFONO</label>
                <input name= "Telefono" type="text" class="form-control" id="ExampleInputTelefono">
            </div>
            <div class="container-sm form-check">
        </center>
        <div class="d-grid gap-2 col-3 mx-auto">
        <button class="btn btn-primary" type="submit">GUARDAR</button>
    </form>
    <button class="btn btn-primary" type="button" onclick="window.location.href = 'inicioSesion.php';">INICIAR SESION</button>
    <button class="btn btn-primary" type="button" onclick="window.location.href = 'index.html';">REGRESAR</button>
    </div>

</html>