<?php



$dbname = "DataBase";
$username = "root";
$password = "";
$servername = "localhost";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table
$sql = "CREATE TABLE Persons (
    PersonID int,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255)
);";

if ($conn->query($sql) === TRUE) {
    echo "Table Persons created successfully\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}


// Close connection
$conn->close();
?>
