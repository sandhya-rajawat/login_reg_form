<?php
include './loginfrm.php';
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "datastore";
$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
// echo "Connected successfully";
if (isset($_POST['submit'])) {
    $Email = ($_POST['email']);
    $PassWord = ($_POST['password']);
$sql =("SELECT * FROM loginregform WHERE  PassWord='$PassWord' AND  Email = '$Email'  ");

    $result =mysqli_query($con,$sql);
    $user = mysqli_fetch_assoc($result);
    print_r($user);
    if ($user) {
       header('location: index.php');
      }
     else {
        echo "Data is Wrong!!";
    }
}

?>