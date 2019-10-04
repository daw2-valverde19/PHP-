<?php

session_start();
date_default_timezone_set('Europe/Madrid');

if(!isset($_SESSION['contador'])){
    echo "ok";
    $_SESSION['contador'] = 1;
}else{
    $_SESSION['contador'] = $_SESSION['contador'] + 1;
}
echo "Visitante: ". $_SESSION['contador']."<br>";


$date = date( "Y-m-d" );
echo "<br>Yesterday it was ". date( "d", strtotime( "-1 day", strtotime( $date ) ) );
echo "<br>The previous month is ". date( "m", strtotime( "-1 month", strtotime( $date ) ) );

$mes = date("m");
$day = date("d");
$resto_year = 12 - $mes;


if ($mes ==  1) { $resto_mes = 31 - $day; }
if ($mes ==  2) { $resto_mes = 28 - $day; }
if ($mes ==  3) { $resto_mes = 31 - $day; }
if ($mes ==  4) { $resto_mes = 30 - $day; }
if ($mes ==  5) { $resto_mes = 31 - $day; }
if ($mes ==  6) { $resto_mes = 30 - $day; }
if ($mes ==  7) { $resto_mes = 31 - $day; }
if ($mes ==  8) { $resto_mes = 31 - $day; }
if ($mes ==  9) { $resto_mes = 30 - $day; }
if ($mes == 10) { $resto_mes = 31 - $day; }
if ($mes == 11) { $resto_mes = 30 - $day; }
if ($mes == 12) { $resto_mes = 31 - $day; }

echo "<br>There are " .$resto_mes. " days left in this month.<br>";
echo "There are " .$resto_year. " months left in the current year.<br>";

if (($mes >= 1) && ($mes <= 4)) { echo "Buena Primavera!!"; }
if (($mes >= 5) && ($mes <= 8)) { echo "Buen Verano!!"; }
if (($mes >= 9) && ($mes <= 12)) { echo "Buen Invierno!!"; }



?>

<html>
<head>
    <title>Estructuras y bucles</title>
</head>
<body>
<br><br>
<div id="formulario_contacto" class="">
    <form class="form" action="TextArea.php" method="POST">
    <p>Texto</p>
        <div class="form-group">
            <textarea name="texto" rows="4" cols="50">Escribe aqui el texto que quieras</textarea>
        </div>
        <br>
        <div class="form-group">
            <label>Color</label>
            <input type="color" name="color">
        </div>
        <br>
        <div class="form-group">
            <label>Tipografia</label>
            <select name="Tipografia">
                <option value="Georgia">Georgia</option>
                <option value="Impact">Impact</option>
                <option value="Comic Sans MS">Comic Sans MS</option>
                <option value="Verdana">Verdana</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label>Tamaño de letra</label>
            <select name="Size">
                <option value="6">6</option>
                <option value="18">18</option>
                <option value="22">22</option>
                <option value="30">30</option>
                <option value="40">40</option>
            </select>
        </div>
         <div class="form-group">
        <label>Recordar</label>
            <input type="checkBox" name="cookies">
        </div>
        <br>
        <div class="form-group">
			<input type="submit" id="submit" name="submit" tabindex="4" value="Enviar">
        </div>
        <?php
           if(isset($_COOKIE['color'])){
                $style="color:".$_COOKIE['color'].";font-family:".$_COOKIE['Tipografia'].";font-size:".$_COOKIE['Size'];
         ?>
         <div style="<?php echo $style ?>">
            <?php echo $_COOKIE['texto']?>
        </div>
        <?php
           }
        ?>
    </form>
</div>
</body>
</html>
<?php
include "Footer.html";
?>
