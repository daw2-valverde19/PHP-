<?php

session_start();
date_default_timezone_set('UTC');
echo date('l jS \of F Y h:i:s A')."<br><br>";

if(isset($_POST["nombre"])){
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    
    
    $_SESSION["usuario"] = $nombre;
    $_SESSION["ap1"] = $apellido1;
    $_SESSION["ap2"] = $apellido2;
    
    $controlNombre = "oscar";
    
    echo "Hola! ". ucfirst($nombre)." ". ucfirst($apellido1)." ". ucfirst($apellido2);
    
    if($nombre != $controlNombre){
        echo "<br><br>Null control<br>Error! El nombre no coincide.";
    }else{
        echo "<br><br>Ejemplo de sesion donde guardo el nombre del usuario <br> El nombre del usuario es: " .$_SESSION["usuario"] ." ". $_SESSION["ap1"]." ". $_SESSION["ap2"];
    }

    echo "<br><br>Esto es un ejemlo de cookie<br> Cookie: " .$_COOKIE["primera_cookie"];
}


if(!empty($_GET)){
    $get = $_GET["get"];
    echo "Variable pasada por Get! <br>". $get;
}

session_destroy();

?>