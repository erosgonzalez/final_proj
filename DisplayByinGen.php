<?php
    include 'database.php';
    
    $results = getGen($_GET['gen']);
    
    echo json_encode($results);
?>