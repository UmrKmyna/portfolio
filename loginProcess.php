<?php 
    include "DBcredentials.php";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM `users` where user_name = '".$_POST['userName']."' AND password = '".$_POST['password']."' LIMIT 1;";
    // die;
    $result = $conn -> query($sql);
    $row = mysqli_fetch_assoc($result);
    if($row){
        session_start();
        $_SESSION['userName'] = $_POST['userName'];
        $sql2 = "UPDATE  `users` SET login_at = now() where user_name = '".$_POST['userName']."' AND password = '".$_POST['password']."';";
        $result2 = $conn -> query($sql);
        header("Location: dashboard.php");
        die();
    }else{
        header("Location: login.php?login=failed");
        die();
    }
?>