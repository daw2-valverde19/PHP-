<?php
$db = mysqli_connect('localhost', 'root', '') or die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'teatroo') or die(mysqli_error($db));
$noRegistros = 4; //Registros por página
$pagina = 1; //Por defecto pagina = 1
$buskr = "";
if($_GET['pagina']){
    $pagina = $_GET['pagina']; //Si hay pagina, lo asigna
    $buskr=$_GET['searchs']; //Palabra a buscar
}
//Utilizo el comando LIMIT para seleccionar un rango de registros
$sSQL = "SELECT oTe.obra_name, oTy.obraType_label, e.escritor_fullname FROM obraTeatro as oTe, obraType as oTy, escritor as e where oTe.obra_Type = oTy.obraType_id and e.escritor_id = oTe.obra_escritor and obra_name LIKE '%$buskr%' LIMIT ".($pagina-1)*$noRegistros.",$noRegistros";
$result = mysqli_query($db,$sSQL) or die(mysqli_error($db));
	
//Exploracion de registros
echo '<table border = "1"> <tr> <th>Obra</th> <th>Genero</th> <th>Autor</th> </tr>';
while ($row = mysqli_fetch_assoc($result)) {
	extract($row);
	echo '<tr>';
	echo '<td>' .$obra_name . '</td><td>' . $obraType_label . '</td><td>' . $escritor_fullname . '</td>';
	echo '<tr>';
}
echo '</table>';


//Imprimiendo paginacion
$sSQL = "SELECT count(*) FROM obraTeatro as oTe, obraType as oTy, escritor as e where oTe.obra_Type = oTy.obraType_id and e.escritor_id = oTe.obra_escritor and obra_name LIKE '%$buskr%'"; //Cuento el total de registros
$result = mysqli_query($db,$sSQL);
$row = mysqli_fetch_array($result);
$totalRegistros = $row["count(*)"]; //Almaceno el total en una variable
$noPaginas = $totalRegistros/$noRegistros; //Determino la cantidad de paginas

?>

<table>
    <tr>
        <td colspan="2"> <?php echo "<strong>Total registros: </strong>" .$totalRegistros; ?></td>
    </tr>
    <tr>
        <td colspan="2"> <?php echo "<strong>Pagina: </strong>".$pagina; ?></td>
    </tr>

    
    <tr bgcolor="f3f4f1">
        <td colspan="4"><strong>Pagina:
        
<?php

for($i=1; $i<$noPaginas+1; $i++) { //Imprimo las paginas
	if($i == $pagina)
		echo "<font color=red> $i </font>"; //A la pagina actual no le pongo link
	else
		echo "<a href=\"?pagina=" .$i. " &searchs= " .$buskr. " \" style=color:#000;> " .$i. " </a>";
}

?>
	   </strong></td>
    </tr>
</table>
