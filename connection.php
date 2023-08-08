<?php
    require_once('./config.php');

    function connectDatabase(){
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if(!$conn){
            //echo "Not connected to mysql database";
            die("Connection failed: ". mysqli_connect_error());
        }

        return $conn;
    }

    
?>