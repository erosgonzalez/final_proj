<?php
    include 'database.php';
    
    $results = getYear($_GET['artistYear']);
    
    echo json_encode($results);
?>