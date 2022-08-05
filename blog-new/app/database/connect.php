<?php

// create database
$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "blog";
$db_port = "3306";

// create connection
$conn = new mysqli($server_name, $username, $password, $db_name, $db_port);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
