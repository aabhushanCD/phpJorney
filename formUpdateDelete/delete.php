<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cct";
// Getting Id from URL retrive.php
$id = $_GET['id'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// sql to delete a record
if(isset($id)){
  $sql = "DELETE FROM student WHERE id = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: retrive.php'); 
    exit;
} else {
    echo "Error deleting record";
}
}else{
  header('Location: retrive.php');
} 

?>
