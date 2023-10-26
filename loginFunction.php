<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "accounts_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect user input from the form
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$query = "SELECT * FROM users WHERE email = '$email'";


// Check if the email exists in the database
if ($conn->query($query) === TRUE) {
    $result = $conn->query($query);
    $user = $result->fetch_assoc();
    
    // Verify the hashed password
    if ($password === $user['password']) {
        // Set the email in the session
        $_SESSION['email'] = $email;
        
        // Login successful
      echo  '<script>
              window.location.href = "home.php";
            </script>';
    } else {
        // Incorrect password
      echo  '<script>
              alert("Incorrect password, please try again!");
              window.location.href = "login.php";
            </script>';
    }
} else {
      echo '<script>
              alert("An unexpected error occurred. Please try again later.");
              window.location.href = "login.php";
            </script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="process.css">
</head>
<body>

</body>

<script>

</script>

</html>