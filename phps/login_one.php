<?php
session_start();

require "connection.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['mail'])) {
        
        //receive data from loginmail
        try {
            $email = trim($_POST['mail']);

            // select from database
            $sql = "SELECT * FROM `students` WHERE `email` = '$email'";
            $submit = $conn->query($sql);
            $row = $submit->rowCount();

            if($row != 0) {
                $_SESSION['user_mail'] = "$email";
                header('location:../loginpass.php');
            } else {
                $_SESSION['danger'] = "Incorect mail !";
                header('location:../loginmail.php');
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    } else {
        $_SESSION['danger'] = "Enter your email please !";
        header('location:../loginmail.php');
        die();
    }
}