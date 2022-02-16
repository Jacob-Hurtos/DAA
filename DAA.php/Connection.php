<?php
$servername = "localhost";
$username = "root";
$password = "projekt";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully" </br>;
$result = $conn->query($sql);
if($result->num_row > 0){
    while($row = $result->fetch_assoc()){
        echo "id: " $row["id"] . "</br>";
        echo "username" $row["username"] . "</br>";
        echo "password" $row["password"] . "</br>";
    }
}
    else{
        echo " 0 results."; 
    
}
?>
