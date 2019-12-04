<?php
if(isset($_POST['a'])){
    
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    
    $result = $a + $b + $c;

    echo "La suma de " .$a. " + " .$b. " + " .$c. " es igual a ". $result. "";
}
?>