<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = new mysqli('localhost', 'root', '','new7');
// get the post records

$Project_ID= $_POST['Project_ID'];

$Project_Name= $_POST['Project_Name'];
$Department_ID= $_POST['Department_ID'];








if ($con->connect_error){
    die("Connection Failed : ". $con->connect_error);
}
else{
    $stmt=$con->prepare("insert into project(Project_ID,Project_Name,Department_ID)values(?,?,?)");
    $stmt->bind_param("isi",$Project_ID,$Project_Name,$Department_ID);
    $stmt->execute();
    echo"COMPLET";
    $stmt->close();
    $con->close();
   

 }
// database insert SQL code


// insert in database 

	
