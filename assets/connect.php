<?php
// connection.php file
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($gumsuda, $name, $age, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// modified.php file
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $lname = $_POST["lname"];
    $pwd = $_POST["pwd"];

    $sql = "INSERT INTO registration (fname, mname, lname, pwd) VALUES ('$fname', '$mname', '$lname', '$pwd')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: ". $sql. "<br>". $conn->error;
    }
}

$conn->close();
?>