<?php
session_start();

require "connection.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['fname'])  && (!empty($_POST['lname'])) && (!empty($_POST['mail'])) &&(!empty( $_POST['pass']))) {
        
        //receive data from index
        try {
            $_SESSION['user_name'] = $firstname = ucwords(trim($_POST['fname']));
            $_SESSION['user_name_two'] = $lastname = strtoupper(trim($_POST['lname']));
            $email = trim($_POST['mail']);
            $pass = md5($_POST['pass']);

            // check email exist
            $exist = $conn->query("SELECT * FROM `students` WHERE `email` = '$email'")->rowCount();
            if($exist == 0) {
                $sql = "INSERT INTO `students`(`fname`, `lname`, `email`, `password`) VALUES ('$firstname','$lastname','$email','$pass')";
                $conn->exec($sql);

                $_SESSION['username'] = "$firstname";
                $_SESSION['usermail'] = "$email";
                $_SESSION['success'] = "completed successfully";
                header('location:../checkmail.php');
            } else {
                $_SESSION['danger'] = "Email already exist !";
                header('location:../index.php');
            }
            // header('location:../checkmail.php');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    } else {
        $_SESSION['danger'] = "All fields are required !";
        header('location:../index.php');
        die();
    }
}