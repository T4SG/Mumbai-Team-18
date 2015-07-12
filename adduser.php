<?php

require('db_connect.php');
$user_id=$_SESSION['user_id'];
// Create connection

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$username = $_POST['username'];
$name = $_POST['name'];
$name = $_POST['password'];


$sql="INSERT INTO users (username,password,name)
VALUES
('$_POST[username]','$_POST[pass]','$_POST[name]')";
       
$result = $con->query($sql);

echo "*database updated";
?>
