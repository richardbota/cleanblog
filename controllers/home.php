<?php

// Retrieve data from database
$posts = [];
$q = mysqli_query($db, "SELECT * FROM posts NATURAL JOIN authors");
while ($row = mysqli_fetch_assoc($q)) {
    $posts[] = $row;
}
