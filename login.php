<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Login Page</title>
<style>
    body{
      font-family: 'Open Sans', sans-serif;
      background:white;
      margin: 0 auto 0 auto;  
      width:100%; 
      text-align:center;
      margin: 20px 0px 20px 0px; 
    }
    
    h1{
      font-size:1.5em;
      color:black;
    }
    
    .box{
      background:white;
      width:300px;
      border-radius:6px;
      margin: 0 auto 0 auto;
      padding:0px 0px 70px 0px;
      border: gray 4px solid; 
    }
    .userInput{
      background:#ecf0f1;
      border: #ccc 1px solid;
      border-bottom: #ccc 2px solid;
      padding: 8px;
      width:250px;
      color:#AAAAAA;
      margin-top:10px;
      font-size:1em;
      border-radius:4px;
    }
    .password{
      border-radius:4px;
      background:#ecf0f1;
      border: #ccc 1px solid;
      padding: 8px;
      width:250px;
      font-size:1em;
    }
    
    .btn{
      background:#3174D7;
      width:125px;
      padding-top:5px;
      padding-bottom:5px;
      color:white;
      border-radius:4px;
      border: #255CAF 1px solid;
      
      margin-top:20px;
      margin-bottom:20px;
      float:left;
      margin-left:16px;
      font-weight:800;
      font-size:0.8em;
    }
    .btn:hover{
      background:#255CAF; 
    }
    .bg{
      background-image: url("museLogo.png");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: 225px -55px;
    }
</style>
</head>
<body class = "bg">
    
<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>

    <form method = "post" action="checkUser.php">
        <div class="box">
            <h1>Unlock Your Muse</h1>
            <input class = "userInput" type="text" id="username" name="username" placeholder = "Username">
            <input class = "userInput" type="password" id="password" name="password" placeholder = "Password">
            
            <input class = "btn" name="submit" type="submit" value="Login">
                  <a href="https://www.rockhall.com/inductees" class="btn">Guest</a>
        </div> 
  
  </form>
</body>

</html>