<html>
    <div id="formulario_contacto" class="">
        <form class="form" action="Action_phpPac01.php" method="POST">
        
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre">
            </div>
            <br>
            <div class="form-group">
                <label>Apellido 1</label>
                <input type="text" name="apellido1">
            </div>
            <br>
            <div class="form-group">
                <label>Apellido 2</label>
                <input type="text" name="apellido2">
            </div>
            <br>
            <div class="form-group">
    			<input type="submit" id="submit" name="ubmit" tabindex="4" value="Enviar">
            </div>
            
        </form>
    </div>
    <?php
        $valor_cookie = "primera cookie creada";
        setcookie("primera_cookie", $valor_cookie ,time()+3600);
        
        $urlencode = urlencode("prueba Get");
        echo "<a href='Action_phpPac01.php?get=$urlencode'>";
        echo "Clica para ver un ejemplo de get y urlencode!"; 
        echo "</a>";
    ?>
</html>