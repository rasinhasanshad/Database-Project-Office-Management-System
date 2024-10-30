<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = new mysqli('localhost', 'root', '','new7');

// get the post records
$Department_ID= $_POST['Department_ID'];

$Name= $_POST['Name'];
$Employee_ID= $_POST['Employee_ID'];

$Number_Of_Employees= $_POST['Number_Of_Employees'];








if ($con->connect_error){
    die("Connection Failed : ". $con->connect_error);
}
else{
    $stmt=$con->prepare("insert into department(Department_ID,Name,Employee_ID,Number_Of_Employees)values(?,?,?,?)");
    $stmt->bind_param("isii",$Department_ID,$Name,$Employee_ID,$Number_Of_Employees);
    $stmt->execute();
    echo"COMPLET";
    $stmt->close();
    $con->close();
   

 }
// database insert SQL code


// insert in database 

	
