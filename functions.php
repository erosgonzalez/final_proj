<?php
    function displayResults() {
        global $artist;
        
        if(isset($artist)) {
            echo "<table class='table'>";
            
            foreach($artist as $art){
                $name = $art['artistName'];
                $year = $art['artistYear'];
                $genre = $art['artistGenre'];
                $image = $art['artistPic'];
                $info = $art['artistInfo'];
                $vid = $art['artistVid'];
                $id = $art['artistId'];
                
                echo "<tr>";
                
                echo "<img style='width:300px;height:400px;' src='" + $image + "'/><br>";
                
                echo "<td><h4>Name: $name</h4></td>";
                echo "<td><h4>Info: $info</h4></td>";
                echo "<td><h4>Genre: $genre</h4></td>";
                echo "<td><h4>Year: $year</h4></td>";
                echo "<iframe width='100' height='100' src='https://www.youtube.com/" + $vid +"' frameborder='0' allow='autoplay'; encrypted-media' allowfullscreen></iframe><br>";

                echo "<form method='post'>";
                echo "<input type='hidden' name='name' value='$name'>";
                echo "<input type='hidden' name='id' value='$id'>";
                
                if($image){
                    echo "<input type='hidden' name='image' value='$image'>";
                }
                
                echo "<input type='hidden' name='year' value='$year'>";

                if($_POST['id'] == $id) {
                    echo "<td><button class='btn btn-success'>Added</button></td>";
                } 
                else {
                    echo "<td><button class='btn btn-warning'>Add</button></td>";
                }
                
                echo "</form>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }
?>