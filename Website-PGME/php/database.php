<?php
        $servername = "localhost";
        $username = 'root';
        $password = "";
        $database = "burgerschap";
       
        $conn = new PDO("mysql:host=$servername; dbname=$database", $username, $password);
        // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
        }
        //   echo "Connected successfully";
        ?>