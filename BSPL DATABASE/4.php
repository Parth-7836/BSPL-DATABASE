<?php
echo "WE ARE READY TO GET CONNECTED TO DATABASE <br/>";
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "myDB1";
//VALUE INSERTION WITH VARIABLES

// Create connection
$conn = new mysqli($servername, $username, $password, "myDB1");
if ($conn->connect_error) {
    die("CONNECTION FAILED: " . $conn->connect_error);
}
else{
    echo "CONNECTION ESTABLISHED SUCCESSFULLY<br/>";
}
$srno = 4;
$name = "dharmit";
$gender = "female";
$address = "nhdhshs";
$sql="INSERT INTO `parth` (`sno`, `name`, `gender`, `address`) VALUES ('$srno', '$name', '$gender', '$address')";
$result = mysqli_query($conn, $sql);
// check for table insertion
if ($result=== TRUE) {
    echo "the table values was inserted successfully<br/>";
} else {
    echo "the table values not inserted successfully" . $conn->error;
}
?>