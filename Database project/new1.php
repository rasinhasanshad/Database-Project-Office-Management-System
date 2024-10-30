
<!DOCTYPE html> 
<html> 
      
<head> 
    <title> 
        How to call PHP function 
        on the click of a Button ? 
    </title> 
</head> 
  
<body style="text-align:center;"> 
      
    <h1 style="color:green;"> 
        GeeksforGeeks 
    </h1> 
      
    <h4> 
        How to call PHP function 
        on the click of a Button ? 
    </h4> 
      
    <?php
        if(array_key_exists('button1', $_POST)) { 
            button1(); 
        } 
        else if(array_key_exists('button2', $_POST)) { 
            button2(); 
        } 
        function button1() { 
         
            echo '<a href="index1.php">Click here</a>';
        } 
        function button2() { 
   
         '<a href="Index4.php"></a>';
        } 
    ?> 
  
    <form method="post"> 
        <input type="submit" name="button1"
                class="button" value="Button1" /> 
          
        <input type="submit" name="button2"
                class="button" value="Button2" /> 
    </form> 
</body> 
  
</html> 