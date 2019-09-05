<?php
    include_once './dbConnection.php';

    $name = $_GET['name'];
    $tel = $_GET['phoneNumber'];

    $insertStudentForm = "INSERT INTO Students (
        stuName,
        stuTel
    ) VALUES (
        '$name',
        '$tel'
    )";

    // echo $insertStudentForm;

    if ($conn->query($insertStudentForm) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insertStudentForm . "<br>" . $conn->error;
    }

    $conn->close();
?>