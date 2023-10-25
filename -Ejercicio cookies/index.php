<?php

//Inicio la variable
$num=0;

//Si la variable no existe, la creo 

if(!isset($_COOKIE["numero"])){
setcookie("numero","0",time()+(86400*30),"/");
}else{
  $num=$_COOKIE["numero"];
}

//Si la variable existe sumar 1
if(isset($_GET["clic"])){
  $num++;
  setcookie("numero",$num,time()+(86400*30),"/");
}

//reset
if( isset($_GET["reset"])){
  setcookie("numero", "0", time() + (86400 * 30), "/");
  $num=0;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <!--Al introducir estilos prevalece el orden en el que introduzcas los links-->
    <!--Link estilos-->
    <link rel="stylesheet" href="estilo.css"> 
    <!-- Link compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Libreria compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<!--En href enviamos el formulario en este caso . que seria la misma pagina, si no index2 o lo que sea -->
<!--/?y la variable donde almaceno contador-->
<a href="./?clic"><button class="btn btn-info">Click</button></a>

<p>Has pulsado <?= $num ?> veces</p>

<!--Si pulsamos al reset nos envia a la misma pagina y no pone contador a cero-->
<a href="./?reset"><small>reset</small></a>


<!--Link jquery-->
<script type="text/javascript" src="jquery.min.js"></script>
<!--Link funciones javascript-->
<script src="funciones.js"></script>

</body>
</html>