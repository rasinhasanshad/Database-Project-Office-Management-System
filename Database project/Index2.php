<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = new mysqli('localhost', 'root', '','new7');

// get the post records
$Employee_ID= $_POST['Employee_ID'];

$First_Name= $_POST['First_Name'];
$Middle_Name= $_POST['Middle_Name'];



$Last_Name= $_POST['Last_Name'];

$Gender = $_POST['Gender'];
$Birthdate= $_POST['Birthdate'];

$Address = $_POST['Address'];






if ($con->connect_error){
    die("Connection Failed : ". $con->connect_error);
}
else{
    $stmt=$con->prepare("insert into employees(Employee_ID,First_Name,Middle_Name,Last_Name,Gender,Birthdate,Address)values(?,?,?,?,?,?,?)");
    $stmt->bind_param("issssss",$Employee_ID, $First_Name, $Middle_Name, $Last_Name, $Gender, $Birthdate, $Address);
    $stmt->execute();
    echo"COMPLET";
    $stmt->close();
    $con->close();
   

 }
// database insert SQL code


// insert in database 

