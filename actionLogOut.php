<?php
 require_once("server.php");
 if(isset($_POST["btnlogout"])) {

    // if($count == 1){  

        header('location:  category.php');
 
        echo "<h1><center> Logout successful </center></h1>";  
    
} 
    else
    {
        header("location:login.php");
    }

?>