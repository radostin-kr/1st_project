<?php

function login(){
    $legitUsername = "rado";
    $legitPassword = "1234";
        if ($_POST["username"] == $legitUsername && 
        $_POST["password"] == $legitPassword 
    ) {
        header("Location: welcome.html");
    } else {
        header ("Location: index.html");
    } 
}
login();