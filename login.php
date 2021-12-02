<?php
require_once('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link href="http://fonts.googleapis.com/css?family=Economica" rel="stylesheet" type="text/css">
  

</head>

    
<body background="https://lh5.googleusercontent.com/proxy/GiYImiH5aZ3XKytuiaFl3GdfNpB3FS5bY2yXSkiDW8Z9p4K_BcxQ70Hfe-GSG4ndfjLue8xOUMsBB_sZDqxZpbnmiSjsU9ewt84nYrMnAgq0LEykqmkr_2TyPxUmZMa4APZPiuwaafr7ytS2TA5rNrzC=s0-d">

<!-- <body> -->
<div class="container mt-5">
    <div class="row"> 
        <div class="col ">
            <div class="card">
            <div id="flaw">- USIM BRITE -</div>
                <div class="h2"><center>Login Here</div><br>
                
                <div class="card-body">
                    <form action="actionLogin.php" method="post">
                  <center> <div style="float:center;width:200px;padding:10px;border-right:0px solid #eee;font-style:italic;margin:10px;">
                    <div style="background:url(http://i.imgur.com/cwIuN.png) repeat; border:0px solid #000;padding:5px;width:250px; height:205px;">
                    <div style="width:240px;background:#fff;">

                        <div class="form-group">
                            <label for="matric_number"><b>Matric No. :</b> </label>
                            <input class="form-control" type="number" name="matric_number" placeholder="Enter your matric number" required>
                        </div>

                        <div class="form-group">
                            <label for="password"><b>Password :</b> </label>
                            <input class="form-control" type="password" id="password" name="password" placeholder="Enter your Password" required>
                        </div>

                        <div>

                        <input type="checkbox" onclick="myFunction()"> Show Password

                        </div>
</div></div>

                        <br>

                        <?php
            if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
              echo "<strong style=color:red;>Wrong Matric Number / Password!</strong>";
              
              }
              ?>
             

                        <!-- <button class="btn btn-primary btn-block text-white" type="submit" name="btnLogStu">Login</button> -->
                        <input class="btn btn-primary btn-block text-white" type="submit" name="btnLogStu" value="Login">

                        <br>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<style>
#flaw {
font-family: cambria;
font-size: 100px;
text-align: center;
background-image: url(http://i.imgur.com/WnZBloI.gif) ;
-webkit-background-clip: text;
background-clip: text;
color: rgba(0,0,0,0);
margin-top:0px;
margin-bottom:5px;
}

.h2 {
background: url(http://i.imgur.com/5ZhjXZ1.png);
font-family: economica;
font-size: 20px;
letter-spacing: 3px;
text-transform: justify;
text-align: center;
margin:auto;
text-transform: none;
color:#000000;
width: 200px;
padding:2px;
margin-bottom:0px;
-webkit-transition: 0.4s;
    -moz-transition: 0.4s;
    border: 5px solid #fff;
    box-shadow: 0px 0px 5px #aaa;
}

.h2:hover {
-webkit-transition-duration:0.6s;
-moz-transition-duration:0.6s;
-ms-transition-duration:0.6s;
-o-transition-duration:0.6s;
transition-duration:0.6s;
}


</style>
</body>
</html>