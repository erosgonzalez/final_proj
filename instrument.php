<?php
session_start();
include 'functions.php';
    include 'database.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Make Muse</title>
        
        <style>
            body, html {
                height: 100%;
                margin: 0;
            }
        </style>
    </head>
    <body class = 'bg'>
    <div class='container'>
        <div class='text-center'>
            <nav class='navbar navbar-default - navbar-fixed-top'>
                <div class='container-fluid'>
                    <div class='navbar-header'>
                        <a class='navbar-brand' href='#'>Muse For You</a>
                    </div>
                    <ul class='nav navbar-nav'>
                        <li><a href='main.php'>Muse</a></li>
                        <li><a href = 'logout.php'>
                        <span aria-hidden='true'>
                        </span> Log Out <?php" ".$_SESSION['username']?></a></li>
                    </ul>
                </div>
            </nav>
            <br /> <br /> <br />
            
            <form method = "get">
                <div class="form-group">
                    Material: 
                     <select id = "mat" name = "mat">
                         <option value = "Null"> Stuff</option>
                        <option value="Wood">Wood</option>
                        <option value = "Metal">Metal</option>
                        <option value = "Plastic">Plastic</option>
                    </select>
                    <br/>
                    <br/>
                     Genre: 
                     <select id = "gen" name = "gen">
                         <option value "Null">Stuff</option>
                        <option value="Rock">Rock</option>
                        <option value="Metal">Metal</option>
                        <option value="Hip-Hop">Hip-Hop</option>
                    </select>
                    
                </div>
            
                <br /><br />
            </form>
            <input type="submit" id="btn2" name = "btn2" value="Submit" class="btn btn-default">

            <br/>
            
            <div id = "display2" class="text-center"></div> 
            </br></br></br>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="results.js"></script>
        </div>
    </body>
</html>