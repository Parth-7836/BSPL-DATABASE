<?php
echo "WE ARE READY TO GET CONNECTED TO DATABASE <br/>";
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "myDB1";
//VALUE INSERTION

// Create connection
$conn = new mysqli($servername, $username, $password, "myDB1");
if ($conn->connect_error) {
    die("CONNECTION FAILED: " . $conn->connect_error);
}
else{
    echo "CONNECTION ESTABLISHED SUCCESSFULLY<br/>";
}

$sql="INSERT INTO `parth` (`sno`, `name`, `gender`, `address`) VALUES ('2', 'dharmit', 'male', 'nandanvan')";
$result = mysqli_query($conn, $sql);
// check for table insertion
if ($result=== TRUE) {
    echo "the table values was inserted successfully<br/>";
} else {
    echo "the table values not inserted successfully" . $conn->error;
}
?>