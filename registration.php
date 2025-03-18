<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "datastore";
$con = new mysqli($servername, $username, $password, $database);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
echo "<script>alert('Connected successfully')</script>";
include './form.php';

if(isset($_POST['submit'])){
   $Name = $_POST['name'];
  $PassWord = $_POST['password'];
  $Email = $_POST['email'];
if(strlen($PassWord)<6){
  echo"Password must be atlest 6 charectes long";
}

$sql="INSERT INTO  loginregform (Name,PassWord,Email) 
 VALUES('$Name','$PassWord','$Email')";
$result=mysqli_query($con,$sql);
if($result){
  echo "<script>alert('data insert')</script>";
}

else{
  echo "<script>alert('data  not insert')</script>";
}

}

?>