
<?php require_once("header.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- <title>Document</title> -->


 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href= 
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity= 
"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"> 
  
    <link rel="stylesheet" href= 
"https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity= 
"sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous"> 
  
 
        <title> 
       Sport
    </title> 
</head>

<body>

<?php require_once("header.php") ?><br><br>

<div class="container"> 
        <div class="row"> 
            <div class="col-lg-20 mb-4"> 
      

<?php
include_once 'server.php';
$sql = "SELECT * FROM organizer";

$result = $conn->query($sql);

// var_dump($result);

if ($result->num_rows > 0) {
  //output data of each row
  while($row = $result->fetch_assoc()) {

  echo "<div class='card-group'>
  <div class='card' style='width: 28rem;'>
  <img src='$row[poster]' class='card-img-top' alt='$row[poster]' >";

  echo "  <div class='form-group'>
  <form action='registration.php' >
        <input type= 'hidden' value='$row[id]'>

        <button type='btnRegister'>Register Here!</button>
   </form>";

  }
//... do some stuff here
       //But here I need to assign value to Field1:
//  echo "<img src=poster/$row[poster] class='rounded-circle' alt='$row[poster]'/>"; "<br>";
//   echo "<tr><th>
//   <img  style='width:200px;height:200px;'  src='$row[poster]'>
//   </th></tr>
//   <tr>
//   <td> <button> button </button> </td>
//   </tr>
//   ";
  
 // "<button onclick='$row[id]' href='registration.php'>go to event</button>";
  
} 
else {
  echo "0 results";
}


$conn->close();
?>

 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity= 
"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"> 
    </script> 
  
    <script src= 
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity= 
"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"> 
    </script> 
  
    <script src= 
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity= 
"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"> 
    </script> 


</body>
</html>
