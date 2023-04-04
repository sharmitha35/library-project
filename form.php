<?php
include("connection.php");
$id=$_POST["id"];
$name=$_POST["name"];
$department=$_POST["department"];
$email=$_POST["email"];
$user=$_POST["user"];
$pass=$_POST["pass"];
$phone=$_POST["phone"];

$sql="INSERT INTO det(id,name,department,email,username,password,phone)VALUES('$id','$name','$department','$email','$user','$pass','$phone')";
if($conn->query($sql) === TRUE){
    echo'<script>alert("data inserted successfully")</script>';
}
else{
    echo "<table>";
    echo "error: ". $sql . "<br>" .$conn->error; 
}


?>