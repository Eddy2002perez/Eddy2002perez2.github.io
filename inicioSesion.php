<?php
   include("conexion.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      // estos campos vienen del html estos si dejalos asi
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
      //

      // revisa esta query sea igual a lo que tiene en tu BD, si no corrigelo
      $sql = "SELECT id FROM usuario WHERE correo = '$myusername' and contraseña = '$mypassword'";
      // 

      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = mysqli_query($db,$sql);
      
      $count = mysqli_num_rows($result);
      if($count == 1) {
          $_SESSION['login_user'] = $myusername;
          echo "<script type='text/javascript'>alert('logeado');</script >";
          // aqio a donde quieres redireccionar
        header("Location: /recordatorio/opciones.html");
      } else {
        echo "<script type='text/javascript'>alert('error en login');</script>";
    }
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
</head>

<body>
<video autoplay loop muted>
        <source src="4.mp4" type="video/mp4">
    </video>
    <div class="cap"></div>

    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .centrar-imagen {
        display: flex;
        justify-content: center;
    }
</style>
</head>
<div class="centrar-imagen">
    <img src="inicioSesion.png" alt="" width="200" height="200">
</div>
<center>
    <h1
    style="color: #FFFFFF">INICIAR SESION
    </h1>
</center>

</body>
<style>
    div {
        margin-bottom: 20px;
        /* Espacio de margen inferior entre los campos de texto */
    }
</style>
</div>
<div class="container">
    <form action = "" method = "post">
        <center>
            <div class="w-25 p-3">
                <label for="exampleInputEmail1" class="form-label"style="color: #FFFFFF"> USUARIO</label>
                <input name="username"  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="w-25 p-3">
                <label for="exampleInputPassword1" class="form-label"style="color: #FFFFFF"> CONTRASEÑA</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="container-sm form-check">
        </center>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit">INICIAR SESION</button>
            <button class="btn btn-primary" type="button" onclick="window.location.href = 'index.html';">REGRESAR</button>
        </div>
    </form>
</div>




</div>

</html>