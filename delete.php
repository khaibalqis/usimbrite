<?php require_once("header.php") ?>


<?php 

        require_once("server.php ");

        if(isset($_GET['Del']))
        {
            $id = $_GET['Del'];
            $query = " delete from organizer where id = '".$id."'";
            $result = mysqli_query($conn,$query);

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

?>