<?php
$servername = "localhost";
$username = "bb18115";
$password = "3ck46grXcFkPD";
$database = "ce154_bb18115";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Connected successfully
?> 