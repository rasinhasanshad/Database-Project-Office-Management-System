<html> 
  
<head> <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 42px;
  font-size: 50px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
<style>
div.scrollmenu {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: #777;
}
</style>
    <!-- Compressed CSS -->
    <link rel="stylesheet" href= 
"https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css" /> 
  
    <!-- Compressed JavaScript -->
    <script src= 
"https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"> 
    </script> 
    <script src= 
"https://cdn.jsdelivr.net/npm/foundation-sites@6.5.1/dist/js/foundation.min.js"> 
    </script> 
</head> 
  
<body style="background-image: url('image5.jpg');">
    <center> 
    <div class="navibar">
        <ul class="dropdown menu" data-dropdown-menu> 
            <li> 
                <a href="#">Employee</a> 
                <ul class="menu"> 
                    <li><a href="index1.php"><button name="visual" id="newbtn" class="button button1" >Employees</button></a> </li> 
                    <li><a href="Index4.php"><button name="audio"  id="newbtn" class="button button1">Add Employees</button></a></li> 
                   
</ul> 
            </li> 
            <li><a href="#">Department</a> 
                <ul class="menu"> 
                    <li><a href="department_table.php"><button name="visual" id="newbtn" class="button button1" >Department</button></a> </li>
                    
                    <li><a href="department2.php"><button name="visual" id="newbtn" class="button button1" >Add </button></a></li> 
                    </ul> 
            </li> 
           

            <li><a href="#">Project</a> 
                <ul class="menu"> 
                    <li><a href="project_table.php"><button name="visual" id="newbtn" class="button button1" >Project</button></a> </li>
                    
                    <li><a href="project2.php"><button name="audio"  id="newbtn" class="button button1">Add Project</button></a></li> 
                    </ul> 
            </li> 

            <li><a href="#">Works_on</a> 
                <ul class="menu"> 
                    <li><a href="works_on_table.php"><button name="visual" id="newbtn" class="button button1" >Works on</button></a> </li>
                    
                    <li><a href="works_on2.php"><button name="audio"  id="newbtn" class="button button1">Add Works on</button></a></li> 
                    </ul> 
            </li> 

            <li> 
                <a href="#">Manager</a> 
                <ul class="menu"> 
                    <li><a href="manager.php"><button name="visual" id="newbtn" class="button button1" >Manager</button></a> </li> 
                    
                   
</ul> 
            </li> 

            <li> 
                <a href="#">Controls</a> 
                <ul class="menu"> 
                    <li><a href="controls.php"><button name="visual" id="newbtn" class="button button1" >Controls</button></a> </li> 
                    
                   
</ul> 
            </li> 

        </ul> 
</div>
    </center> 
  
    <script> 
        $(document).ready(function () { 
            $(document).foundation(); 
        }); 
    </script> 
</body> 
  
</html>