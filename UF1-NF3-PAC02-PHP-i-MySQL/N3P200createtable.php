<?php
//connect to MySQL
$db = mysqli_connect('localhost', 'root', '') or 
    die ('Unable to connect. Check your connection parameters.');

//create the main database if it doesn't already exist
$query = 'CREATE DATABASE IF NOT EXISTS teatroo';
mysqli_query($db,$query) or die(mysqli_error($db));

//make sure our recently created database is the active one
mysqli_select_db($db,'teatroo') or die(mysqli_error($db));

//create the movie table
$query = 'CREATE TABLE obraTeatro (
        obra_id        INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT, 
        obra_name      VARCHAR(255)      NOT NULL, 
        obra_type      TINYINT           NOT NULL DEFAULT 0, 
        obra_year      INTEGER NOT NULL, 
        obra_editor    INTEGER     NOT NULL, 
        obra_escritor  INTEGER     NOT NULL, 

        PRIMARY KEY (obra_id),
        KEY movie_type (obra_type, obra_year)

    ) 
    ENGINE=MyISAM';
mysqli_query($db,$query) or die (mysqli_error($db));

//create the movietype table
$query = 'CREATE TABLE obraType ( 
        obraType_id    TINYINT UNSIGNED NOT NULL AUTO_INCREMENT, 
        obraType_label VARCHAR(100)     NOT NULL, 
        PRIMARY KEY (obraType_id) 
    ) 
    ENGINE=MyISAM';
mysqli_query($db,$query) or die(mysqli_error($db));

//create the people table
$query = 'CREATE TABLE escritor ( 
        escritor_id         INTEGER UNSIGNED    NOT NULL AUTO_INCREMENT, 
        escritor_fullname   VARCHAR(255)        NOT NULL, 
        escritor_nacionalidad    VARCHAR(255)        NOT NULL, 
        escritor_edad INTEGER NOT NULL DEFAULT 0, 

        PRIMARY KEY (escritor_id)
    ) 
    ENGINE=MyISAM';
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'teatro database successfully created!';
?>
