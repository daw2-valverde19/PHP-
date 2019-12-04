<?php

$db = mysqli_connect('localhost', 'root', '') or die ('Unable to connect. Check your connection parameters.');

mysqli_select_db($db, 'teatroo') or die(mysqli_error($db));

if(isset($_POST['firstname'])){
    echo "<form> <select name='select'>";
    echo "<option value=".$_POST['firstname'].">".$_POST['firstname']."</option>";
    echo "<option value=".$_POST['lastname'].">".$_POST['lastname']."</option>";
    echo "<option value=".$_POST['age'].">".$_POST['age']."</option>";
    echo "<option value=".$_POST['color'].">".$_POST['color']."</option>";
    echo "<option value=".$_POST['heigth'].">".$_POST['heigth']."</option>";
    echo "</form>";
}


//<select name="rating">
//       <option value="1">1</option>
//       <option value="2">2</option>
//       <option value="3">3</option>
//       <option value="4">4</option>
//       <option value="5">5</option>
//      </select>