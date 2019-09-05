<?php
    include_once './dbConnection.php';

    $insertStudent = "INSERT INTO Students (
        stuName,
        stuTel
    ) VALUES (
        'Beautiful Aree',
        '191'
    )";

    if ($conn->query($insertStudent) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insertStudent . "<br>" . $conn->error;
    }

    $conn->close();
?>