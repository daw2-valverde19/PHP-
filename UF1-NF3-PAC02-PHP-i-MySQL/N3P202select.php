<?php
$db = mysqli_connect('localhost', 'root', '') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'teatroo') or die(mysqli_error($db));


$query = 'SELECT oTe.obra_name, oTy.obraType_label, e.escritor_fullname FROM obraTeatro as oTe, obraType as oTy, escritor as e where oTe.obra_Type = oTy.obraType_id and e.escritor_id = oTe.obra_escritor';

$result = mysqli_query($db,$query) or die(mysqli_error($db));


// show the results
echo '<table border = "1"> <tr> <th>Obra</th> <th>Genero</th> <th>Autor</th> </tr>';
while ($row = mysqli_fetch_assoc($result)) {
	extract($row);
	echo '<tr>';
	echo '<td>' .$obra_name . '</td><td>' . $obraType_label . '</td><td>' . $escritor_fullname . '</td>';
	echo '<tr>';
}
echo '</table>'

?>
