<?php

$servername = "den1.mysql6.gear.host";
$username = "intern1";
$password = "To6f?154?3kM";
$dbname = "intern1";

//Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check Connection
if($conn->connect_error) {
	die("Connection Failed: ". $conn->connect_error);
}
