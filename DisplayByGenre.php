<?php
    include 'database.php';
    
    $results = getGenre($_GET['artistGenre']);
    
    echo json_encode($results);
?>