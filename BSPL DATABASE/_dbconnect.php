<?php

// include '_dbconnect1.php';
require '_dbconnect.php';
/*If we Include the file, 
it will show us a warning that we have an error in the file and then print "Hello." 
If we use Require, it will show us a fatal error message and stop the script right there. 
The difference between Include and Require is that Include shows us the warning and then lets the script run. 
But Require stops the script whenever an error occurs.*/

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
while ($row = mysqli_fetch_assoc($result)) {
  echo $row['sno'] .  ". Hello " . $row['name'] . " Welcome to " . $row['dest'];
  echo "<br>";
}
