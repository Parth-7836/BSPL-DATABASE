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
$sql = "SELECT * FROM phptrip WHERE dest='Bihar'";
$result = mysqli_query($conn, $sql);

//USAGE OF WHERE CLAUSE TO FETCH DATA
$num=mysqli_num_rows($result);
echo $num;
echo"Record Found in the database<br/>";
$no=1;
if($num>0){
    while($row=mysqli_fetch_assoc($result)){
        echo $no. "Sr NO: ".$no."<br/>";
        echo "NAME: ".$row['name']."<br/>";
        echo "DESTINATION: ".$row['dest']."<br/>";
        $no++;
    }
  }

  // UASGE OF UPDATE QUERY
  $sql="UPDATE `phptrip` SET `name` = 'hetupdated' WHERE `phptrip`.`sno` = 2";
  $result = mysqli_query($conn, $sql);
  echo($result);
  // QUERY FOR AFFECTED ROWS
  $aff = mysqli_affected_rows($conn);
  echo"<br/>";
  echo "the number of affected rows are: $aff <br/>";
  if($result){
      echo "the record was updated successfully<br/>";
  }
  else{
      echo "the record was not updated successfully" . $conn->error;
  }