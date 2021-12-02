<?php
//start the session
session_start();

if (isset($_SESSION["matric_number"] && $_SESSION["matric_number"] === true){

        header ("location : category.php");
        exit;
}


?>