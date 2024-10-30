<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horizontal Hover Dropdown Menu</title>
    <style>.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 42px;
  font-size: 50px;
  border: none;
}
        /* Style the navigation menu */
        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        /* Style the links inside the navigation menu */
        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        /* Change the color of links on hover */
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Dropdown container */
        .dropdown {
            float: left;
            overflow: hidden;
        }

        /* Style the dropdown button */
        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 20px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        /* Style the dropdown content (hidden by default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Style the links inside the dropdown */
        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        /* Add a background color to dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>

<div class="navbar">
  
    <div class="dropdown">
        <button class="dropbtn">Employee</button>
        <div class="dropdown-content">
            <?php
            // Your PHP code to fetch product categories from the database
            // Example:
            $categories = array('<a href="index1.php"><button name="visual" id="newbtn" class="button button1" >Employees</button></a>', '<a href="Index4.php"><button name="audio"  id="newbtn" class="button button1">Add Employees</button></a>');
            foreach ($categories as $category) {
                echo '<a href="#1">' . $category . '</a>';
            }
            ?>
        </div>

        <div class="dropdown">
        <button class="dropbtn">Department</button>
        <div class="dropdown-content">
            <?php
            // Your PHP code to fetch product categories from the database
            // Example:
            $categories1 = array('<a href="department_table.php"><button name="visual" id="newbtn" class="button button1" >Department</button></a>', '<a href="department2.php"><button name="audio"  id="newbtn" class="button button1">Add Department</button></a>');
            foreach ($categories1 as $category1) {
                echo '<a href="#">' . $category1 . '</a>';
            }
            ?>
        </div>
        <div class="dropdown">
        <button class="dropbtn">Project</button>
        <div class="dropdown-content">
            <?php
            // Your PHP code to fetch product categories from the database
            // Example:
            $categories2 = array('<a href="project_table.php"><button name="visual" id="newbtn" class="button button1" >Project</button></a>', '<a href="project2.php"><button name="audio"  id="newbtn" class="button button1">Add Project</button></a>');
            foreach ($categories2 as $category2) {
                echo '<a href="#">' . $category2. '</a>';
            }
            ?>
        </div>
        <div class="dropdown">
        <button class="dropbtn">Works_on</button>
        <div class="dropdown-content">
            <?php
            // Your PHP code to fetch product categories from the database
            // Example:
            $categories4 = array('<a href="works_on_table.php"><button name="visual" id="newbtn" class="button button1" >Works on</button></a>', '<a href="works_on2.php"><button name="audio"  id="newbtn" class="button button1">Add Works on</button></a>');
            foreach ($categories4 as $category4) {
                echo '<a href="#">' . $category4 . '</a>';
            }
            ?>
        </div>
    </div>
    
</div>

</body>
</html>
