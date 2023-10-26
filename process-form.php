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
$created_at = date("Y-m-d H:i:s");
$hashedpassword = password_hash($password, PASSWORD_DEFAULT);



    // Insert user data into the database
    if($email!=null && $password!=null && $created_at!=null){
        $query = "INSERT INTO users (email, password, created_at) VALUES ('$email', '$password','$created_at')";
        try {
            if ($conn->query($query) === TRUE) {
            echo'<script>
                    window.location.href = "personal-info-form.php";
                </script>';
        } else {
            echo'<script>
                    alert("An unexpected error occurred. Please try again later.");
                    window.location.href = "signup.php";
                </script>';
        }
        }
        catch(Exception $e) {
            echo'<script>
                    alert("Email already registered, please use another accounts");
                    window.location.href = "signup.php";
                </script>';
        }
    }else{
        echo'<script>
            alert("An unexpected error occurred. Please try again later.");
            window.location.href = "signup.php";
        </script>';
    }



// Close the database connection
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Error</title>
    <link rel="stylesheet" href="process.css">
</head>
<body>

</body>

<script>

</script>

</html>