<?php 

    session_start();

    if(empty($_SESSION['tsoftId'])){
        
        header("location:./index.php");
    }

?>