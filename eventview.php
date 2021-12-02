<?php require_once("header.php") ?>
<?php 

    require_once("server.php");
    $query = " select * from organizer ";
    $result = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Bordered Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .bs-example{
            margin: 20px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
   
<body background="https://lh5.googleusercontent.com/proxy/GiYImiH5aZ3XKytuiaFl3GdfNpB3FS5bY2yXSkiDW8Z9p4K_BcxQ70Hfe-GSG4ndfjLue8xOUMsBB_sZDqxZpbnmiSjsU9ewt84nYrMnAgq0LEykqmkr_2TyPxUmZMa4APZPiuwaafr7ytS2TA5rNrzC=s0-d">

<body>
    <div class="bs-example">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Event</h2>
                    </div>
                    <?php
                    include_once 'server.php';
                    $i =1;
                    $sql = "SELECT * FROM organizer";
                    $result = $conn->query($sql);
                    ?>
 
                    <?php
                    if ($result ->num_rows > 0) {
                    ?>
                      <table class='table table-bordered table-striped'>
                       
                      <tr>
                        <td>No</td> 
                        <td>Poster</td>
                        <td>Series No</td>
                        <td>Category</td>
                        <td>Organization</td>
                        <td>Event Name</td>
                        <td>Venue</td>
                        <td>Date</td>
                        <td>Time</td>
                        <td>:::</td>

                      </tr>
                    <?php
                    //$i=0;
                    while($row = $result->fetch_assoc()) {


                        $id = $row['id'];
                        $poster= $row['poster'];
                        $series_no = $row['series_no'];
                        $category = $row['category'];
                        $organization= $row['organization'];
                        $event_name = $row['event_name'];
                        $venue = $row['venue'];
                        $date = $row['date'];
                        $time = $row['time'];
            ?>



                
                    <tr>
                        <!-- <td><img src=images/$row[poster]></td> -->
                        <!-- <td> echo '<img src="data:poster/png;base64,'.base64_encode($row['poster'] ).'" height="100" width="100">';?></td> -->
                        <!-- <td>echo '<img src="data:image/png;base64,'.base64_encode($row['poster'] ).'" height="150" width="150"/>'; ?></td> -->
                        <td><?php echo $id ?></td>
                      <td><?php echo "<img src='$row[poster]'width='90' height='90'>" ; ?></td>
                      <td><?php echo $row["series_no"]; ?></td>
                      <td><?php echo $row["category"]; ?></td>
                      <td><?php echo $row["organization"]; ?></td>
                      <td><?php echo $row["event_name"]; ?></td>
                      <td><?php echo $row["venue"]; ?></td>
                      <td><?php echo $row["date"]; ?></td>
                      <td><?php echo $row["time"]; ?></td>
                     
                      <td>
                      <a href="edit.php?id=<?php echo $id ?>">Edit</a>  
                      <a href="delete.php?Del=<?php echo $id ?>">Delete</a>
                      </td>

                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    else{
                        echo "No result found";
                    }
                    $conn->close();

                    ?>
                </div>
            </div>        
        </div>
    </div>