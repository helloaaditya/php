<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <h3>User Login</h3>
    <form action="p15.php" method="post">
        <input type="text" name="username" required>
        <input type="password" name="password" required><br>
        <input type="submit" name="submit" value="Login">
    </form>
    <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$conn){
    echo"failed connection";
}


// Get user input
$username = $_POST['username'];
$password = $_POST['password'];

// Query to check if the username exists in the database
$sql = "SELECT * FROM user_info WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found, now check the password
    $row = $result->fetch_assoc();
    if ($row['password'] == $password) {
        // Authentication successful
        echo "Login successful!";
    } else {
        // Incorrect password
        echo "Incorrect password. Please try again.";
    }
} else {
    // User not found
    echo "User not found. Please check your username.";
}

$conn->close();
?>
    
</body>
</html>