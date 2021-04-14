<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./session/session.php');

$session = new session();
$login_result = $session->login($_POST["username"], $_POST["password"]);

if(!$login_result){
    header("Location: login.php?error=true");
    exit();
}
else{
    header("Location: dashboard.php");
    exit();
}

?>


 <?php
    // require 'setenv.php';
    // require './utilities/connection.php';

    // if(!isset($_POST['username'], $_POST['password'])){
    //     exit('Please fill out both the username and password!');
    // }

    // if($stmt = $conn->prepare('SELECT user_id, password FROM user WHERE username = ?')) {
        
    //     $stmt->bind_param('s', $_POST['username']);
    //     $stmt->execute();
    //     $stmt->store_result();

        
    //     if($stmt->num_rows > 0) {
    //         $stmt->bind_result($user_id, $password);
    //         $stmt->fetch();

    //         if(hash("sha256", trim($_POST['password'])) == $password) {

    //             session_regenerate_id();
    //         $_SESSION['loggedIn'] = TRUE;
    //         $_SESSION['username'] = $_POST['username'];
    //         $_SESSION['user_id'] = $id;
    //         header('Location: profile.php');
                
                
    //         }
    //         else {
    //             echo "Incorrect username or password. 1";
    //         }
    //     }
    //     else {
    //         echo "Incorrect username or password. 2";
    //     }
    //     $stmt->close();
    // }
?>