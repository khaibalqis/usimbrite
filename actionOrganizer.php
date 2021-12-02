<?php require_once("header.php") ?>
<?php
 require_once("server.php");
 $target_dir = "poster/";
 $target_file = $target_dir . basename($_FILES["poster"]["name"]);
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 $update = false;
 // Check if image file is a actual image or fake image
 if(isset($_POST["btnCreate"])) {
   $check = getimagesize($_FILES["poster"]["tmp_name"]);
   if($check !== false) {
     echo "File is an image - " . $check["mime"] . ".";
     $uploadOk = 1;
   } else {
     echo "File is not an image.";
     $uploadOk = 0;
   }
 }
 
 // Check if file already exists
 if (file_exists($target_file)) {
   echo "Sorry, file already exists.";
   $uploadOk = 0;
 }
 
 // Check file size
 if ($_FILES["poster"]["size"] > 500000) {
   echo "Sorry, your file is too large.";
   $uploadOk = 0;
 }
 
 // Allow certain file formats
 if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
 && $imageFileType != "gif" ) {
   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
   $uploadOk = 0;
 }
 
 // Check if $uploadOk is set to 0 by an error
 if ($uploadOk == 0) {
   echo "Sorry, your file was not uploaded.";
 // if everything is ok, try to upload file
 } else {
   if (move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file)) {
     echo "The file ". basename( $_FILES["poster"]["name"]). " has been uploaded.";
   } else {
     echo "Sorry, there was an error uploading your file.";
   }
 }
     $series_no = mysqli_real_escape_string($conn, $_POST["series_no"]);
     $category = mysqli_real_escape_string($conn, $_POST["category"]);      
     $organization = mysqli_real_escape_string($conn, $_POST["organization"]);
      $event_name= mysqli_real_escape_string($conn, $_POST["event_name"]);
      $venue = mysqli_real_escape_string($conn, $_POST["venue"]);
      $date= mysqli_real_escape_string($conn, $_POST["date"]);
      $time= mysqli_real_escape_string($conn, $_POST["time"]);
 
  

 $sql = "INSERT INTO organizer ( poster, series_no, category, organization, event_name, venue, date, time) VALUES ('{$target_file}' , '{$series_no}' , '{$category}','{$organization}' , '{$event_name}' , '{$venue}', '{$date}', '{$time}')";
     
  
  
  if ($conn->query($sql) === TRUE) {
           echo "Record Created";
           // go to home
     } else {
           echo "Error " .$sql . "<br>" . $conn->error ;
       }
       $conn->close();



//  if (isset($_POST["btnCreate"])) {
     
//     $target_dir = "poster/";
   
//      $series_no = mysqli_real_escape_string($conn, $_POST["series_no"]);
//      $category = mysqli_real_escape_string($conn, $_POST["category"]);
//      $organization = mysqli_real_escape_string($conn, $_POST["organization"]);
//      $event_name= mysqli_real_escape_string($conn, $_POST["event_name"]);
//      $venue = mysqli_real_escape_string($conn, $_POST["venue"]);
    
//      $fileName = $target.dir . basename($_FILES["poster"]["name"]);
//      $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
 
      
//          // Allow certain file formats
//          // $allowTypes = array('jpg','png','jpeg','gif');
//          $files = array($fileType);
//          // print_r($files);
        
  
//              $poster = $_FILES['poster']['tmp_name'];
             
  
//              $imgContent = addslashes(file_get_contents($poster));
            
 
//      $sql = "INSERT INTO organizer (poster, series_no, category, organization, event_name, venue) VALUES ('{$imgContent}' , '{$series_no}' , '{$category}','{$organization}' , '{$event_name}' , '{$venue}' )";
     
     
//      if(count($errors)==0){
 
 
         
//          mysqli_query($db, $query);
         
     
//          header('location: sport.php');
     
//      }
     
 
 
 
//      if ($conn->query($sql) === TRUE) {
//          echo "<script>alert('You are now logged in')</script>";
//      } else {
//          echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "')</script>";
//      }
 
  //  $conn->close();
//  }
?>

<!-- if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];

		mysqli_query($db, "INSERT INTO info (name, address) VALUES ('$name', '$address')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: index.php');
	} -->