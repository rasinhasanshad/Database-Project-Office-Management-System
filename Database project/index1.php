<?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'new7';
 
// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli =  new mysqli('localhost', 'root', '','new7');
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = "SELECT * FROM employees";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid blue;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid blue;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid blue;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter bold;
        }
    </style>
</head>
 
<body style="background-image: url('image2.jpg');">
<center>
    <section>
        <h1>EMPLOYEE</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Employee_ID</th>
                <th>First_Name</th>
                <th>Middle_Name</th>
                <th>Last_Name</th>
                <th>Gender</th>
                <th>Birthdate</th>
                <th>Address</th>

            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php 
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['Employee_ID'];?></td>
                <td><?php echo $rows['First_Name'];?></td>
                <td><?php echo $rows['Middle_Name'];?></td>
                <td><?php echo $rows['Last_Name'];?></td>
                <td><?php echo $rows['Gender'];?></td>
                <td><?php echo $rows['Birthdate'];?></td>
                <td><?php echo $rows['Address'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section></center>
</body>
 

</html>