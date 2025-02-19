<?php
echo "WE ARE READY TO GET CONNECTED TO DATABASE <br/>";
$servername = "localhost";
$username = "root";
$password = "";
// BASIC CONNECTION
// DATABASE CREATION


// Create connection
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("CONNECTION FAILED: " . $conn->connect_error);
} else {
    echo "CONNECTION ESTABLISHED SUCCESSFULLY";
}

// Create database
$sql = "CREATE DATABASE myDB1";
$result = mysqli_query($conn, $sql);
if ($result === TRUE) {
    echo "DATABASE CREATED SUCCESSFULLY<br/>";
} else {
    echo "ERROR CREATING DATABASE: " . $conn->error;
}
