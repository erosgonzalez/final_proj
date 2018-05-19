<?php
    include 'database.php';
    
    $results = getMat($_GET['mat']);
    
    echo json_encode($results);
?>