<?php
echo "WE ARE READY TO GET CONNECTED TO DATABASE <br/>";
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "myDB1";
//SELECTING AND DISPLAYING DATA

// Create connection
$conn = new mysqli($servername, $username, $password, "myDB1");
if ($conn->connect_error) {
    die("CONNECTION FAILED: " . $conn->connect_error);
}
else{
    echo "CONNECTION ESTABLISHED SUCCESSFULLY<br/>";
}

//DELETE PARTICULAR ROW WITH LIMIT  LIMIT=UP TO WHAT LIMIT YOU WANT TO DELETE THE PARTICULAR COLOUMN
$sql = "DELETE FROM `parth1` WHERE `gender` = 'female' LIMIT 2";
$result = mysqli_query($conn, $sql);
$result=mysqli_affected_rows($conn);
echo "the number of affected rows are: $result <br/>";
if ($result=== TRUE) {
    echo "the table values was inserted successfully<br/>";
} else {
    echo "the table values not inserted successfully" . $conn->error;
}

?>