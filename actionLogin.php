<?php
 require_once("server.php");

 if (isset($_POST["btnLogStu"])) {
     
    $matric_number = $_POST['matric_number'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $matric_number = stripcslashes($matric_number);  
        $password = stripcslashes($password);  
        $matric_number= mysqli_real_escape_string($conn, $matric_number);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from login where matric_number = '$matric_number' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  

            header('location: category.php');
     
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     


    //if () {
       // echo "<script>alert('You are now logged in')</script>";
    //} else {
      //  echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "')</script>";
    //}

    
}

 ?>




