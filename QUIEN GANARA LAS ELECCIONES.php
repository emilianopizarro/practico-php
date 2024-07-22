<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="caja1">
        <div class="todositems">
            <h1>FORO.ET20</h1>
            <form action="QUIEN GANARA LAS ELECCIONES.php" method="post">
            
              <div class="uno">
             NickName:<br> <input class="relleno" type ="text" name="Nombre">
             </div>

             <div class="uno"> 
                Tema de interes:<br>¿Quien ganara las elecciones?<br>
            </div>

            <div class="uno"> 
            <b> Dejar un comentaio</b> <br> <textarea class="comentario" type ="text" name="comentario"></textarea>
            </div>

            <div class="uno">  
                <input type="submit" name="enviar">
            </div>
 </form>
</div>
</div>




<?php
try {
    $conexion= new PDO('mysql:host=localhost;dbname=foro-et20.','root','');
 if(!empty($_POST)){
$nombre=$_POST['Nombre'];
$texto=$_POST['comentario'];

$fecha=date("y/m/d");$conexion->query("INSERT INTO `interes-votacion` (`ID`, `Nickname`, `Comentario`, `Fecha`) VALUES (NULL, '$nombre', '$texto', '$fecha');");
}

$busca = $conexion->query("SELECT * FROM `interes-massa`");
echo '<div class="comentarios">';
foreach ($busca as $imagen)
{   
    echo '<div class="separacion">';
    echo "<p>".$imagen['Nickname']."<br>";
    echo '<div class="centrado">';
    echo "".$imagen['Comentario']."<br>";
    echo '</div>';
    echo "".$fecha=date("y/m/d")."</p>";
   echo "<br>";
   echo '</div>';
}
 echo '</div>';

} catch (PDOException $e) {
echo 'Falló la conexión: ' . $e->getMessage();



}
?>
</body>
</html>