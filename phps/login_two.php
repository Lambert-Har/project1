<?php
session_start();

require "connection.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['pass'])) {
        
        //receive data from loginmail
        try {
            $pass = md5($_POST['pass']);

            // select from database
            $sql = "SELECT * FROM `students` WHERE `password` = '$pass'";
            $submit = $conn->query($sql);
            $row = $submit->rowCount();

            if($row != 0) {
                header('location:../dashboard.php');
            } else {
                $_SESSION['danger'] = "Incorect password !";
                header('location:../loginpass.php');
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    } else {
        $_SESSION['danger'] = "Enter password please !";
        header('location:../loginpass.php');
        die();
    }
}