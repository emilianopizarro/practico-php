<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>



<?php



  try{
     $conexion= new PDO('mysql:host=localhost;dbname=foro-et20.','root','');
       echo "<h1>TEMAS</h1>";

      $busca = $conexion->query("SELECT * FROM `temas`");



   

      foreach ($busca as $imagen)
        {   
        $a=$imagen['tema'] ;
        $b=".php";
          $c=$a . $b;
            echo '<a href="' . $c .  '">'.$imagen['tema']."</p>";           
        }

        
      
      


       








    } catch (PDOexeption $e){
      echo "fallo la conexion;" . $e->getMessage();

    }
?>





</body>
</html>
<?php
