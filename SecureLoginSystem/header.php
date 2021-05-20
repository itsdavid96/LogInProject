<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GATE Login </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css"> 
</head>

<body>
    <header>
        <h1>GATE Login</h1>
        <nav>
            <ul>
               <!-- <li><a href="./index.php">Home</a></li> -->
                <?php 
                if (!isset($_SESSION['username'])) {
                    echo '<li><a href="./login.php">Login</a></li>
                    <li><a href="./register.php">Register</a></li>
                    <li><a href="./recover_credentials.php">Recover</a></li>';
                } else {
                    echo '<li><a href="server/logout.php">Log Out</a></li>';
                }
                ?> 
            </ul>
        </nav>
    </header>