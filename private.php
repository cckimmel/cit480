<?php 
    if(empty($_SESSION['user'])) 
    { 
        header("Location: index.php?page=signup.php"); 

        die("Redirecting to login page"); 
    } 

