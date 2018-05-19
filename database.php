<?php

function getDBConnection() {
    
    //C9 db info
    $host = "localhost";
    $dbName = "music_data";
    $username = "root";
    //$username = getenv("C9_USER");
    $password = "";
    
    //when connecting from Heroku
    // if  (strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
    //     $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    //     $host = $url["host"];
    //     $dbName = substr($url["path"], 1);
    //     $username = $url["user"];
    //     $password = $url["pass"];
    // } 
    
    try {
        //Creates a database connection
        $dbConn = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
    
        // Setting Errorhandling to Exception
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
    catch (PDOException $e) {
       echo "Problems connecting to database!";
       exit();
    }
    
    
    return $dbConn;
}
function getName($name){
  $db = getDBConnection(); 
        //$categoriesHTML = "<option value=''></option>";  // User can opt to not select a category 
        
        $sql = "SELECT * FROM artist_data WHERE artistName = '$name'";
        $statement = $db->prepare($sql); 
        $statement->execute(); 
        $records = $statement->fetchAll(); 
        return $records; 
}
function getYear($year){
    $db = getDBConnection(); 
        // $categoriesHTML = "<option value=''></option>";  // User can opt to not select a category 
        
        $sql = "SELECT * FROM artist_data WHERE artistYear = '$year'"; 
        $statement = $db->prepare($sql); 
        $statement->execute(); 
        $records = $statement->fetchAll(); 
        return $records; 
}
function getGenre($genre){
    $db = getDBConnection(); 
        //$categoriesHTML = "<option value=''></option>";  // User can opt to not select a category 
        
        $sql = "SELECT * FROM artist_data WHERE artistGenre = '$genre'"; 
        $statement = $db->prepare($sql); 
        $statement->execute(); 
        $records = $statement->fetchAll(); 
        return $records; 
}
function getMat($mat){
    $db = getDBConnection(); 
        //$categoriesHTML = "<option value=''></option>";  // User can opt to not select a category 
        
        $sql = "SELECT * FROM in_data WHERE mat = '$mat'"; 
        $statement = $db->prepare($sql); 
        $statement->execute(); 
        $records = $statement->fetchAll(); 
        return $records; 
    
}
function getGen($gen){
    $db = getDBConnection(); 
        //$categoriesHTML = "<option value=''></option>";  // User can opt to not select a category 
        
        $sql = "SELECT * FROM in_data WHERE gen = '$gen'"; 
        $statement = $db->prepare($sql); 
        $statement->execute(); 
        $records = $statement->fetchAll(); 
        return $records; 
    
}
function getAll($genre,$year,$name){
    session_start();
    $db = getDBConnection();
    
    $sql = "SELECT * FROM artist_data WHERE artistYear = 1960";
    
    // if(!empty($name) && !empty($year) && !empty($genre)){
    //     $sql .= " artistName = $name";
    //     $sql .= " AND artistYear = $year";
    //     $sql .= " AND artistGenre = $genre";
    // }
    // else if (!empty($name) && !empty($year)){
    //     $sql .= " artistName = $name";
    //     $sql .= " AND artistYear = $year";
    // }
    // else if(!empty($year) && !empty($genre)){
    //     $sql .= " artistYear = $year";
    //     $sql .= " AND artistGenre = $genre";
    // }
    // else if(!empty($name) && !empty($genre)){
    //     $sql .= " artistName = $name";
    //     $sql .= " AND artistGenre = $genre";
    // }
    $statement = $db->prepare($sql);
    
    $data = array(":artistYear" => $_GET['artistYear']); 
        $statement->execute($data);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        
        echo $result;
        return $result;
    
    
}

?>