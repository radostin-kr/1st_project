<?php

$connection 
$servername = "localhost";
$db = "example";
$db_username = "root";
$db_password = "";

try {
    $this->connection = new PDO(
        "mysql:host=$servername;dbname=$db",
        $db_username,
        $db_password
    );
    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

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