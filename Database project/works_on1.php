<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = new mysqli('localhost', 'root', '','new7');

// get the post records
$Employee_ID= $_POST['Employee_ID'];
$Project_ID= $_POST['Project_ID'];
$Hours= $_POST['Hours'];










if ($con->connect_error){
    die("Connection Failed : ". $con->connect_error);
}
else{
    $stmt=$con->prepare("insert into works_on(Employee_ID,Project_ID,Hours)values(?,?,?)");
    $stmt->bind_param("iis",$Employee_ID,$Project_ID,$Hours);
    $stmt->execute();
    echo"COMPLETE";
    $stmt->close();
    $con->close();
   

 }
// database insert SQL code


// insert in database 

	
