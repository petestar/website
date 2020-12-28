<?php
// Connect to server/database
$mysqli = mysqli_connect("localhost", "1608839", "Taylorgang00", "db1608839");
if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Run SQL query
$res = mysqli_query($mysqli, "SELECT id, Email, Password, Repeat Password FROM registration");

// Are there any errors in my SQL statement?
if(!$res) {
  print("MySQL error: " . mysqli_error($mysqli)); 
  exit;
}