<?php
session_start();

function displayMenu(){
    if(isset($_SESSION['username'])){
        include 'main.php';//header("Location: login.php");
    }else{
        header("Location: login.php");
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <?=displayMenu();?>
      </head>
      
</html>