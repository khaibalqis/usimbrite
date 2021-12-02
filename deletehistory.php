<?php 

        require_once("server.php ");

        if(isset($_GET['Del']))
        {
            $id = $_GET['Del'];
            $query = " delete from organizer where id = '".$id."'";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                header("location:history.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:history.php");
        }

?>