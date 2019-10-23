<?php
// connect to mysqli
$db = mysqli_connect('localhost', 'root', '') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure you're using the correct database
mysqli_select_db($db,'teatroo') or die(mysqli_error($db));

// insert data into the movie table
$query = 'INSERT INTO obraTeatro
        (obra_id, obra_name, obra_type, obra_year, obra_editor,
        obra_escritor)
    VALUES
        (1, "Valerian and the City of a Thousand Planets", 1, 2017, 1, 2),
        (2, "Blade Runner 2049", 2, 2017, 5, 6),
        (3, "Godzilla: King of Monsters", 3, 2019, 4, 3),
        (4, "Godzilla: King of Monsters", 1, 2019, 4, 3),
        (5, "Godzilla: King of Monsters", 6, 2019, 4, 3)';
mysqli_query($db,$query) or die(mysqli_error($db));

// insert data into the movietype table
$query = 'INSERT INTO obraType 
        (obraType_id, obraType_label)
    VALUES 
        (1,"Sci Fi"),
        (2, "Drama"), 
        (3, "Adventure"),
        (4, "War"), 
        (5, "Comedy"),
        (6, "Horror"),
        (7, "Action"),
        (8, "Kids")';
mysqli_query($db,$query) or die(mysqli_error($db));

//// insert data into the people table
$query  = 'INSERT INTO escritor
        (escritor_id, escritor_fullname, escritor_nacionalidad, escritor_edad)
    VALUES
        (1, "Dane DeHaan", "esp", 20),
        (2, "Luc Besson", "fran", 12),
        (3, "Michael Dougherty","esp", 12),
        (4, "Millie Bobby Brown", "esp", 30),
        (5, "Ryan Gosling", "esp", 45),
        (6, "Denis Villeneuve", "esp", 34)';
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Data inserted successfully!';
?>
