<?php
// MySQL database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "application_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$qualification = $_POST['qualification'];
$course = $_POST['course'];

// Insert data into the MySQL database
$sql = "INSERT INTO applications (name, email, phone, gender, qualification, course) 
VALUES ('$name', '$email', '$phone', '$gender', '$qualification', '$course')";

if ($conn->query($sql) === TRUE) {
    echo "Application submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>