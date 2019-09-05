<?php 
    include_once './dbConnection.php';

    // $createTable = "CREATE TABLE Students(
    //     stuID INT AUTO_INCREMENT PRIMARY KEY,
    //     stuName VARCHAR(64) NOT NULL,
    //     stuTel VARCHAR(10),
    //     timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    // )";
    $createTable = "CREATE TABLE Provinces (
        provinceID INT AUTO_INCREMENT PRIMARY KEY,
        provinceName VARCHAR(64) NOT NULL,
        timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    )";
    // success = true
    // fail = false
    // TRUE === TRUE 
    if ($conn->query($createTable) === TRUE) {
        echo "Table Students created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $conn->close();
?>