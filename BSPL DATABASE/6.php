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
$sql = "SELECT * FROM phptrip";
$result = mysqli_query($conn, $sql);

//FIND NUMBER OF RECORDS RETURNED
$num=mysqli_num_rows($result);
echo $num;
echo"Records Found in the database<br/>";

//DISPLAYING RECORDS IN SIMPLE WAY
/*
if($num>0){
    $row=mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br/>";
    $row=mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br/>";

}
else{
    echo "NO RECORDS FOUND<br/>";
}
*/
// WE CAN FETCH USING WHILE IN CONCISE WAY
while($row=mysqli_fetch_assoc($result)){
    echo "SNO: ".$row['sno']."<br/>";
    echo "NAME: ".$row['name']."<br/>";
    echo "DESTINATION: ".$row['dest']."<br/>"; 
}

?>