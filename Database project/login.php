<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .login-container {
            width: 300px;
            margin: 100px auto;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }
        .login-form button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body style="background-image: url('image5.jpg');">
<center>
    <div class="login-container">
        <h2>ADMIN</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="login-form">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</center>
</body>
</html>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Your database connection code
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "new7";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement to prevent SQL injection
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $param_username);
        
        // Set parameters
        $param_username = $_POST["username"];
        
        // Execute the prepared statement
        $stmt->execute();
        
        // Store result
        $stmt->store_result();
        $hash=password_hash($_POST["password"],PASSWORD_DEFAULT);
        // Check if username exists
        if ($stmt->num_rows == 1) {
            // Bind result variables
            $stmt->bind_result($id, $username, $hashed_password);
            if ($stmt->fetch()) {
                // Verify password
                if (password_verify($_POST["password"], $hash)) {
                    // Password is correct, start a new session
                    session_start();
                    
                    // Store data in session variables
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"] = $username;
                    
                    // Redirect user to welcome page
                    header("location: Project7.php");
                } else {
                    // Display an error message if the password is not valid
                    echo "Invalid password.";
                    echo $hashed_password;
                    echo $_POST["password"];
                }
            }
        } else {
            // Display an error message if username doesn't exist
            echo "Invalid username.";
        }

        // Close statement
        $stmt->close();
        
        // Close connection
        $conn->close();
    }
}
?>

