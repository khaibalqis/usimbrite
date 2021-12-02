<?php require_once("header.php") ?>



<?php
 require_once("server.php");
//  $target_dir = "payment/";
//  $target_file = $target_dir . basename($_FILES["payment_proof"]["name"]);
//  $uploadOk = 1;
//  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 
 // Check if image file is a actual image or fake image
 if(isset($_POST["btnRegister"])) {
//    $check = getimagesize($_FILES["payment_proof"]["tmp_name"]);
//    if($check !== false) {
//      echo "File is an image - " . $check["mime"] . ".";
//      $uploadOk = 1;
//    } else {
//      echo "File is not an image.";
//      $uploadOk = 0;
//    }
//  }
 
//  // Check if file already exists
//  if (file_exists($target_file)) {
//    echo "Sorry, file already exists.";
//    $uploadOk = 0;
//  }
 
//  // Check file size
//  if ($_FILES["payment_proof"]["size"] > 500000) {
//    echo "Sorry, your file is too large.";
//    $uploadOk = 0;
//  }
 
//  // Allow certain file formats
//  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//  && $imageFileType != "gif" ) {
//    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//    $uploadOk = 0;
//  }
 
//  // Check if $uploadOk is set to 0 by an error
//  if ($uploadOk == 0) {
//    echo "Sorry, your file was not uploaded.";
//  // if everything is ok, try to upload file
//  } else {
//    if (move_uploaded_file($_FILES["payment_proof"]["tmp_name"], $target_file)) {
//      echo "The file ". basename( $_FILES["payment_proof"]["name"]). " has been uploaded.";
//    } else {
//      echo "Sorry, there was an error uploading your file.";
//    }
//  }
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $matric_number= mysqli_real_escape_string($conn, $_POST["matric_number"]);
    $faculty = mysqli_real_escape_string($conn, $_POST["faculty"]);
     $event = mysqli_real_escape_string($conn, $_POST["event"]);
    $email= mysqli_real_escape_string($conn, $_POST["email"]);
    $phone_number = mysqli_real_escape_string($conn, $_POST["phone_number"]);
   
    
    // $payment_method = mysqli_real_escape_string($conn, $_POST["payment_method"]);
   
    $sql = "INSERT INTO registration ( matric_number, name,  faculty, event, email, phone_number) VALUES ('{$matric_number}' ,'{$name}' ,  '{$faculty}','{$event}', '{$email}','{$phone_number}')";
   

    if ($conn->query($sql) === TRUE) {
        echo "You Have Registered!";
    } else {
        echo "ERROR404".$sql . "<br>" . $conn->error ;
    }

  }
    $conn->close();

    ?>