<?php
session_start();
if(isset($_SESSION["userName"])){
    header("Location: dashboard.php");
    die();
}else{
    $file = $_SERVER['DOCUMENT_ROOT'] . "/include/includes.php";
    if (file_exists($file)) {
        include $file;
    } else {
        echo "File not found: " . $file;
    }
    echo(
        '
        <div id = "backgroundPic" class = "backgroundPic"> 
                <div class = "over_background p-5">   
                    <div class="login_box">
                        <div class = "row">
                            <div class = "heading_div">
<!--                                  <img class = "logo" src = "..\img\logo.png">  -->
                                <div>
                                    <h1 class = "login_heading">Manahi\'s</h1> 
                                    <h1 class = "login_heading2">Dashboard</h1>
                                    <h2 class = "login_heading3">Front End Developer</h2>
                                </div>
                            </div>
                            <div class = "pt-5 px-5 pb-2">
                                <form action = "loginProcess.php" method = "post">
                                    <input class = "form-control custom_input"type = "text" name="userName" required = "true" placeholder = "Enter Your Login User Name "><br>
                                    <input class = "form-control custom_input" type = "password" name = "password" required = "true" placeholder = "Enter Your Login Password "> <br>
                                    <input class = "btn btn-outline-secondary custom_button" type = "submit" name="login" value = "login">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        '
);
}
if(isset($_GET['login']) && $_GET['login'] == "failed"){
    echo("
        <script>
            alert('User Name or Password is incorrect');
        </script>
    ");
}
?>