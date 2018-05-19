<?php
    include 'database.php';
    
    $results = getName($_GET['artistName']);
    
    echo json_encode($results);
?>