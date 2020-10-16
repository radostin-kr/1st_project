<?php



function getUserData() {
    $servername = "localhost";
    $db = "example";
    $db_username = "root";
    $db_password = "";
    $connection;

    try {
        $connection = new PDO(
            "mysql:host=$servername;dbname=$db",
            $db_username,
            $db_password
        );
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $sql = "SELECT * FROM user_credentials WHERE username = '".$_POST['username']."' AND 
                                             password = '".$_POST['password']."'";
                                             echo $sql;
    $result = $connection->query($sql);
    $userData = $result-> fetchAll();
    if (empty($userData)) {
        return [];
    } else {
        return $userData[0];
    }
    return $userData[0];
}

function login(){
        if (!empty(getUserData())) {
        header("Location: welcome.html");
    } else {
        header ("Location: index.html");
    } 
}
login();