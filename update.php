
<?php 

require_once("server.php");

// if(isset($_GET['update']))

// {

//   $id = $_GET['edit'];

  if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $series_no =  $_POST["series_no"];
     $category =  $_POST["category"];      
     $organization =  $_POST["organization"];
      $event_name=  $_POST["event_name"];
      $venue = $_POST["venue"];
      $date=  $_POST["date"];
      $time=  $_POST["time"];
 
    mysqli_query($db, "UPDATE organizer SET series_no='$series_no', category='$category', organization='$organization', event_name='$event_name', venue='$venue', date='$date', time='$time' WHERE id=$id");
    // $_SESSION['message'] = "Address updated!"; 
    header('location: eventview.php');
  }



















  //$id = isset($_GET['id']) ? $_GET['id'] : '';
   // $poster = $_POST['poster'];
  //  $series_no = $_POST['series_no'];
  //  $category = $_POST['category'];
  //  $organization = $_POST['organization'];
  //  $event_name = $_POST['event_name'];
  //  $venue = $_POST['venue'];
  //  $date = $_POST['date'];
  //  $time = $_POST['time'];


  //  if (isset($_GET['edit'])) {
		// $id = $_GET['edit'];
	// 	$update = true;
  //   $record = mysqli_query($db, "SELECT * FROM organizer WHERE id=$id");
    

	// 	if (count($record) == 1 ) {
	// 		$n = mysqli_fetch_array($record);
	// 		$series_no = $n['series_no'];
  //     $category = $n['category'];
  //     $organization = $n['organization'];
  //     $event_name = $n['event_name'];
  //     $date = $n['date'];
	// 		$time = $n['time'];
	// 	}
	// }
?>







   <!-- $query = " UPDATE organizer SET  category='".$category."', organization='".$organization.", event_name='".$event_name."', venue='".$venue.", date= '".$date."', time='".$time."'  WHERE id='".$id."'";
   $result = mysqli_query($conn,$query);
  //  $query = " update checks set stuMatric = '".$stuMatric."', stuStat='".$stuStat."',stuReason='".$stuReason."' where No='".$No."'";
  //  $result = mysqli_query($conn,$query);

    
    
    // $result = mysqli_query($conn,$query);

    if($result)
    {
        header("location:eventview.php");
    }
    else
    {
        echo ' Please Check Your Query ';
    }
}
else
{
    header("location:eventview.php");
}


?> -->