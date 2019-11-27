<?php

$servername = "localhost";
$username = "root";
$password = "king";
$dbname = "students";

//create connection

$con = mysqli_connect($servername, $username, $password, $dbname) or die
("Unable to connect to host.");

//Attempt insert query execution

$sql = "INSERT INTO info (email, email3, pass, message) VALUES ('email', 'email3', 'pass', 'message')";

if (mysqli_query($con, $sql)) {
echo "Records inserted successfully.";
} else {
echo "ERROR: Could not able to execute $sql. " .mysqli_error($con);

//Close connection
mysqli_close($con);
?>