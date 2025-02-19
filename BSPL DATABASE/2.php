<?php
echo "WE ARE READY TO GET CONNECTED TO DATABASE <br/>";
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "myDB1";
// TABLE CREATION


// Create connection
$conn = new mysqli($servername, $username, $password, "myDB1");
if ($conn->connect_error) {
    die("CONNECTION FAILED: " . $conn->connect_error);
}
else{
    echo "CONNECTION ESTABLISHED SUCCESSFULLY<br/>";
}
// create table
$sql = "CREATE TABLE `parth1` (`sno` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `gender` VARCHAR(11) NOT NULL , `address` VARCHAR(8) NOT NULL , PRIMARY KEY (`sno`));";
$result = mysqli_query($conn, $sql);
// check for table creation
if ($result=== TRUE) {
    echo "the table was created successfully<br/>";
} else {
    echo "the table was not created successfully" . $conn->error;
}

?>