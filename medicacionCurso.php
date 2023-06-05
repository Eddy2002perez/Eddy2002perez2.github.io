
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <source src="7.mp4" type="video/mp4">
    </video>
    <div class="cap"></div>
  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <div class="container">
        <center>
            <h1
            style="color: #FFFFFF">MEDICACIONES EN CURSO
            </h1>
        </center>

        

                    </div>
                    <?php
include("conexion.php");
session_start();


$sql = "SELECT actividad FROM recordatorio";
$result = mysqli_query($db, $sql);

echo '<table class="table">';
echo '<tr>';
echo '<th scope="col">#</th>';
echo '<th scope="col">En Curso</th>';
echo '<th scope="col"></th>';
echo '<th scope="col"></th>';
echo '</tr>';

$counter = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<th scope="row">' . $counter . '</th>';
    echo '<td>' . $row["actividad"] . '</td>';
    echo '<td><button class="btn btn-primary" type="button" onclick="window.location.href = \'recordatorios.php\';">MODIFICAR</button></td>';
    echo '<td><button class="btn btn-primary" type="button" onclick="window.location.href = \'recordatorios.php\';">Eliminar</button></td>';
    echo '</tr>';
    $counter++;
}

echo '</table>';
    
?>
                    
                </div>
            </div>
        </div>

        <div class="container-sm form-check"></div>
    
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="button"onclick="window.location.href = 'opciones.html';">SALIR</button>
    </div>
</body>

</html>