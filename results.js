$(document).ready(function(){
    
    $("#goback").click( function() {
        window.location.href="login.php";
        }
    );
    
    $("#btn").on('click', function(){
        if($("#artistYear").val() != "Null" ){
            $("#display").html("");
            $.ajax({
                type: "GET",
                url : "DisplayByYear.php",
                dataType: "json",
                data : {"artistYear" : $("#artistYear").val()},
                
                success : function(data){
                   for(var i = 0; i < data.length; i++){
                        

                        $("#display").append("<img style='width:300px;height:400px;' src='" + data[i]['artistPic'] + "'/><br>");
                        $("#display").append("Name: " + data[i]['artistName'] + "<br>");
                        $("#display").append("Info: " + data[i]['artistInfo'] + "<br>");
                        $("#display").append("Genre: " + data[i]['artistGenre'] + "<br>");
                        $("#display").append("Year: " + data[i]['artistYear'] + "<br>");
                        $("#display").append("<iframe width='100' height='100' src='https://www.youtube.com/" + data[i]['artistVid'] +"' frameborder='0' allow='autoplay'; encrypted-media' allowfullscreen></iframe><br>");
                    }
                    
                },complete: function(data,status) { //optional, used for debugging purposes
                  console.log(data.length);
                }
            });
        }
         if($("#artistName").val().length!=0 && $("#artistYear").val()=== "Null" && $("#artistGenre").val()==="Null"){
         $("#display").html("");
         $.ajax({
            type : "GET",
            url  : "DisplayByName.php",            
            dataType : "json",
            data : {"artistName" : $("#artistName").val()},            
          success : function(data){
              console.log("NO");
                    for(var i = 0; i < data.length; i++){
                        console.log(i);
                        $("#display").append("<img style='width:300px;height:400px;' src='" + data[i]['aristPic'] + "'/><br>");
                        $("#display").append("Name: " + data[i]['artistName'] + "</td><br>");
                        $("#display").append("Info: " + data[i]['artistInfo'] + "<br>");
                        $("#display").append("Genre: " + data[i]['artistGenre'] + "<br>");
                        $("#display").append("Year: " + data[i]['artistYear'] + "<br>");
                        $("#display").append("<iframe width='100' height='100' src='https://www.youtube.com/" + data[i]['artistVid'] +"' frameborder='0' allow='autoplay'; encrypted-media' allowfullscreen></iframe><br>");
                    }
                },complete: function(data,status) { //optional, used for debugging purposes
                 console.log(data.length);
                }
            });
          // console.log(data.length);
        }
        
         if($("#artistName").val().length===0 && $("#artistYear").val()==="Null" && $("#artistGenre").val() != "Null"){
         $("#display").html("");
         $.ajax({
            type : "GET",
            url  : "DisplayByGenre.php",            
            dataType : "json",
            data : {"artistGenre" : $("#artistGenre").val()},            
          success : function(data){
              console.log("NO");
                    for(var i = 0; i < data.length; i++){
                        console.log(i);
                        $("#display").append("<img style='width:300px;height:400px;' src='" + data[i]['aristPic'] + "'/><br>");
                        $("#display").append("Name: " + data[i]['artistName'] + "</td><br>");
                        $("#display").append("Info: " + data[i]['artistInfo'] + "<br>");
                        $("#display").append("Genre: " + data[i]['artistGenre'] + "<br>");
                        $("#display").append("Year: " + data[i]['artistYear'] + "<br>");
                        $("#display").append("<iframe width='100' height='100' src='https://www.youtube.com/" + data[i]['artistVid'] +"' frameborder='0' allow='autoplay'; encrypted-media' allowfullscreen></iframe><br>");
                    }
                },complete: function(data,status) { //optional, used for debugging purposes
                 console.log(data.length);
                }
            });
            //console.log(data.length);
        }
        
    });
    $("#btn2").on('click', function(){
        if($("#gen").val() != "Null" ){
            $("#display2").html("");
            $.ajax({
                type: "GET",
                url : "DisplayByinGen.php",
                dataType: "json",
                data : {"gen" : $("#gen").val()},
                
                success : function(data){
                   for(var i = 0; i < data.length; i++){
                        console.log(i);
                        alert();
                        $("#display2").append("<img style='width:300px;height:400px;' src='" + data[i]['inPic'] + "'/><br>");
                        $("#display2").append("Name: " + data[i]['inname'] + "<br>");
                     }
                    
                },complete: function(data,status) { //optional, used for debugging purposes
                  console.log(data.length);
                }
            });
        }
        if($("#mat").val() != "Null" ){
            $("#display2").html("");
            $.ajax({
                type: "GET",
                url : "DisplayByinMat.php",
                dataType: "json",
                data : {"mat" : $("#mat").val()},
                
                success : function(data){
                   for(var i = 0; i < data.length; i++){
                        console.log(i);
                        alert();
                        $("#display2").append("<img style='width:300px;height:400px;' src='" + data[i]['inPic'] + "'/><br>");
                        $("#display2").append("Name: " + data[i]['inname'] + "<br>");
                     }
                    
                },complete: function(data,status) { //optional, used for debugging purposes
                  console.log(data.length);
                }
            });
        }
    
});
});

