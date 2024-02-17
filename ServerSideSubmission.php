<?php
    $servername = "domain server";
    $username = "user name";
    $password = "";
    $dbname = "database name";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $tableName = "quiz_results";
    $id = "";
    $totalScore = $_POST['total_score']; // Retrieve quiz result from the quiz form submission

    $sql = "INSERT INTO $tableName (total_score) VALUES ('$totalScore')";

    if ($conn->query($sql) === TRUE) {
        echo "Quiz results inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close connection to server
    $conn->close();
?>