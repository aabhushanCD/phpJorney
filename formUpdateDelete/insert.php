<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cct";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['id'])) {
    $id = $conn->real_escape_string($_POST['id']);
    $firstname = $conn->real_escape_string($_POST['firstname']);
    $lastname = $conn->real_escape_string($_POST['lastname']);
    $email = $conn->real_escape_string($_POST['email']);
    
    $query = "INSERT INTO student (id, firstname, lastname, email) VALUES ('$id', '$firstname', '$lastname', '$email')";
    $result = $conn->query($query);
    
    if ($result) {
        header('Location: retrive.php');
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>


