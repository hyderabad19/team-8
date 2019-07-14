<?php

$servername = "localhost";
$username = "root";
$dbname = "jpmc";
$conn  = new mysqli($servername, $username, null, $dbname);

$sql ="
CREATE TABLE School (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    NAME VARCHAR(30) NOT NULL,
    PINCODE VARCHAR(30) NOT NULL,
    EMAIL VARCHAR(30) ,
    PASSWORD VARCHAR(30),
    ADDRESS VARCHAR(30),
    CITY TEXT
    )
    ";
    
    mysqli_query($conn, $sql); 
?>