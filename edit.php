<?php require_once("header.php") ?>

<?php 

    require_once("server.php");

    require_once("header.php") ;

    $id = $_GET['id'];

    $query = "SELECT * FROM organizer WHERE id='$id'";
    $result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Organizer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">

</head>
   
<body background="https://lh5.googleusercontent.com/proxy/GiYImiH5aZ3XKytuiaFl3GdfNpB3FS5bY2yXSkiDW8Z9p4K_BcxQ70Hfe-GSG4ndfjLue8xOUMsBB_sZDqxZpbnmiSjsU9ewt84nYrMnAgq0LEykqmkr_2TyPxUmZMa4APZPiuwaafr7ytS2TA5rNrzC=s0-d">

<body>
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header text-black"> <b>Organizer Form</b></div>
                <div class="card-body">
                    <?php
                        while($row = $result->fetch_assoc()) {
                    ?>      
                            <form action="editOrganizer.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
                    
                            <div class="form-group">
                                <label for='poster'><b>Edit your Poster:</b></label> <br>
                                 <img src="<?php $row['poster'] ; ?>" width='90' height='90'> 
                                <input id='poster' class="form-control" name="poster" type="file" multiple="multiple">
                            </div>
                        
                            <div class="form-group">
                                <label for="series_no"><b> Series No. :</b> </label>
                                <input class="form-control" type="text" value="<?php echo ($row['series_no']); ?>"  name="series_no" placeholder="Fill in the series number of program"required>
                            </div>
                        
                        
                            <div class="form-group">
                                <label for="category"><b>Category :</b> </label>
                                <select class="form-control" name="category" required>
                                    <option value="" selected disabled>Choose your Category</option>
                                    <option value="sport">SPORT</option>
                                    <option value="volunteer">VOLUNTEER</option>
                                    <option value="leadership">LEADERSHIP</option>
                                    <option value="innovation">INNOVATION</option>
                                    <option value="art">ART AND CULTURE</option>
                                    <option value="entre">ENTREPRENEURSHIP</option>
                                </select>
                            </div>
                        
                        
                            <div class="form-group">
                                <label for="organization"><b> Organization :</b> </label>
                                <input class="form-control" type="text" value="<?php echo ($row['organization']); ?>" name="organization" placeholder="Organization"required>
                            </div>
                        
                            <div class="form-group">
                                <label for='event_name'><b> Event name:</b></label> <br>
                                <input class="form-control" name="event_name" type="text" value="<?php echo ($row['event_name']); ?>" placeholder="Event Name"required>
                            </div>
                        
                            <div class="form-group">
                                <label for='venue'><b> Venue:</b></label> <br>
                                <input class="form-control" name="venue" type="text" value="<?php echo ($row['venue']); ?>" placeholder="Venue" required>
                            </div>
                        
                            <div class="form-group">
                                <label for='date'><b> Date:</b></label> <br>
                                <input class="form-control" name="date" type="date" value="<?php echo ($row['date']); ?>" placeholder="Date" required>
                            </div>
                        
                            <div class="form-group">
                                <label for='time'><b> Time:</b></label> <br>
                                <input class="form-control" name="time" type="time" value="<?php echo ($row['time']); ?>" placeholder="time" required>
                            </div>
 
                            <input class="btn btn-primary btn-block text-white" type="submit" name="save" value="Save">
                        
                            <br>
                        
                        </form>
                <?php
                }
                ?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
