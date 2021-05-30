<?php
// Database configuration 
$dbHost     = "localhost";  //  your hostname
$dbUsername = "root";       //  your table username
$dbPassword = "root";          // your table password
$dbName     = "college";  // your database name
$port = 8889; 
// Create database connection 
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, $port); 
 
// Check connection 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
?>