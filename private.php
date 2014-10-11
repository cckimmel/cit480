<?php 
    require("connection.php"); 
    if(empty($_SESSION['user'])) 
    { 
        header("Location: signin.php"); 

        die("Redirecting to login page"); 
    } 
include 'profile_links.php';
?> 
