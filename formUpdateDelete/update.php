<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cct";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



if(isset($_POST['id']))
{
    $id = $_POST['id'];
    $name = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $query = "UPDATE student SET firstname='$name', lastname='$lastname', email='$email' WHERE id='$id' ";
    $result = $conn->query($query);
    if($result){
        echo"Data Updated Successfully";
        header('Location: retrive.php');
    } 
}
?>