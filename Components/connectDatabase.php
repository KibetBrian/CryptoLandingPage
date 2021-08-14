<?php
    $localhost = 'localhost';
    $username = 'root';
    $password = 'root';
    $database = 'newsletter';

    $conn = new mysqli($localhost, $username, $password, $database);
    
    if ($conn->connect_error)
    {
        echo "Database connection failed";
    }
    
    //Creating subscribers table
    /*
    $sql = "CREATE DATABASE IF NOT EXISTS newsletter";

    if ($conn->query($sql) === TRUE )
    {
        echo "Newsletter database created successfully";
    }
    */

    $sql = "CREATE TABLE IF NOT EXISTS newsletter_subscribers(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR (255) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === FALSE)
    {
       echo "Failed to create Table";
    }

    

    $conn->close();
?>