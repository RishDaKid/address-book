<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="addressbook.php">AddressBook</a></li>

  <li style="float:right"><a href="#about">About</a></li>
</ul>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "addressbook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, first_name, last_name,username,email,address,country,state,zip FROM data order by id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<b>id: </b> ". $row["id"]. "  <br><b>Name</b>: ". $row["first_name"]. " <br><b>Last Name:</b>" . $row["last_name"] ."<br> <b>Username:</b>" . $row["username"] ." <br><b>E-mail: </b>" . $row["email"] ."<br><b>Address: </b></b>" . $row["address"] . " <br><b>Country: </b>" . $row["country"] ."<br> <b>State: </b>" . $row["state"] ." <br><b>Zip: </b>" . $row["zip"] ."<br><br><br><br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

