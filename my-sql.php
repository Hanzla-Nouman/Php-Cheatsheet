<?php

echo "We are ready to connect with my sql <br>";

// Ways to connect
// PDO
// 

$servername = "localhost";
$username = "root";
$password = "";
$database = "hanzla_db";

// Creating a new connection
// $conn = mysqli_connect($servername, $username, $password);
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
} else {
    echo "Connected successfully <br>";
}

// Creating a db
//     $sql = "CREATE DATABASE staff";
   

//    if(mysqli_query($conn, $sql)){
//     echo "Database created successfully <br>";
//    }else{
//     echo "Error creating database: ". mysqli_error($conn)."<br>";
//    }

// Craete a table in db
$sqlForTable = "CREATE TABLE`staff2` (`Roll No.` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(11) NOT NULL , `Age` INT NOT NULL , `Exp` INT NOT NULL , PRIMARY KEY (`Roll No.`)) ENGINE = InnoDB
";

   if(mysqli_query($conn, $sqlForTable)){
    echo "Table created successfully <br>";
   }else{
    echo "Error creating Table: ". mysqli_error($conn)."<br>";
   }