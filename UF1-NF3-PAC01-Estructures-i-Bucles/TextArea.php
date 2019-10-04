<?php
if(isset($_POST['color'])){
    $Color = $_POST['color'];
    $Tipografia = $_POST['Tipografia'];
    $Size = $_POST['Size'];
    $texto = $_POST['texto'];
    
    $style="color:".$Color.";font-family:".$Tipografia.";font-size:".$Size;
}else{
    echo "error";
}

if(isset($_POST['cookies'])==true){
    setcookie("color", $Color ,time()+3600);
    setcookie("Tipografia", $Tipografia ,time()+3600);
    setcookie("Size", $Size ,time()+3600);
    setcookie("texto", $texto ,time()+3600);
}

?>

<html>
<head>
    <title>Estructuras y bucles</title>
</head>
<body>
<div style="<?php echo $style ?>">
    <?php echo $texto?>
</div>

</div>
</body>
</html>