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
        <title>Muse For You</title>
        
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
                        <li><a href='instrument.php'>Instruments</a></li>
                        <li><a href = 'logout.php'>
                        <span aria-hidden='true'>
                        </span> Log Out <?php" ".$_SESSION['username']?></a></li>
                    </ul>
                </div>
            </nav>
            <br /> <br /> <br />
            
            <form method = "get">
                <div class="form-group">
                    <label for="artistName">Artist</label>
                    <input type="text" class="form-control" name="artistName" id="artistName" placeholder="Artist Name">
                    <br/>
                    Year (Use this filter point for best functionality) : 
                     <select id = "artistYear" name = "artistYear">
                         <option value = "Null"> Year</option>
                        <option value="1960">1960</option>
                        <option value = "1970">1970</option>
                        <option value="1980">1980</option>
                        <option value="1990">1990</option>
                        <option value = "2000">2000</option>
                        <option value = "2010">2010</option>
                    </select>
                    <br/>
                    <br/>
                     Genre: 
                     <select id = "artistGenre" name = "artistGenre">
                         <option value "Null">Genre</option>
                        <option value="Rock">Rock</option>
                        <option value="Pop">Pop</option>
                        <option value="Hip-Hop">Hip-Hop</option>
                    </select>
                    
                </div>
            
                <br /><br />
            </form>
            <input type="submit" id="btn" name = "btn" value="Submit" class="btn btn-default">

            <br/>
            
            <div id = "display" class="text-center"></div> 
            </br></br></br>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="results.js"></script>
        </div>
    </body>
</html>