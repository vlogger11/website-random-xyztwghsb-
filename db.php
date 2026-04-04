<?php
$conn = new mysqli("localhost", "root", "", "earth_one_db");
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
?>