<?php

$db = mysqli_connect('localhost', 'root', '') or die ('Unable to connect. Check your connection parameters.');

mysqli_select_db($db, 'teatroo') or die(mysqli_error($db));

if(isset($_POST['rating'])){
    $query =  'INSERT INTO reviews (review_obra_id,review_date,reviewer_name, review_comment, review_rating) VALUES (1, "2009-10-4", "' . $_POST['reviewer'] . '", " ' . $_POST['comment'] . '", ' . $_POST['rating'] . ')';
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
}


