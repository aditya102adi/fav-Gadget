<?php

include './global/_dbconnect.php';
session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login.php');
 }
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2><?php


        if (isset($_SESSION['user_name'])) {
            $naam = $_SESSION['user_name'];
            $mail = $_SESSION['user_email'];
            echo "Welcome, $naam!";
            echo "$mail";
        } else {
            echo "Name not found in session.";
        }
       

        ?></h2>
</body>

</html>