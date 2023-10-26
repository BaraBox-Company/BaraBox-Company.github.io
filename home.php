<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <title>capyboxd - Home</title>
</head>
<body>
    <nav>
        <div id="logo"><img src="https://drive.google.com/uc?export=view&id=1M-AQTsnmeQrlnsemxz0IRZfEHuDNi-D8" width="640" height="480"></img></div>
        <div id="space"></div>
        <div id="btn">
            <a href="product.php">Product</a>
            <a href="tracking.php">Tracking</a>
            <a href="my-order.php">My Order</a>
            <a href="history.php">History</a>
            <a href="rate-calculator.php">Rate Calculate</a>
        </div>
        <div id="user">
            <a href=cart.php""><img src="https://drive.google.com/uc?export=view&id=1jElvDmpYBG0ukk1sDB6nCNi0WD5js8dx" alt="cart"></a>
            <!-- <a href="user.php">Koay Jing Wei</a> -->
            <?php
            session_start();
            if (isset($_SESSION['email'])) {
                // Display user email if it's set in the session
                echo '<a href="user.php">' . $_SESSION['email'] . '</a>';
            } else {
                // Display Login and Signup links if email is not set in the session
                echo '<a href="login.php">Log In</a>';
                echo '<a href="signup.php">Sign Up</a>';
            }
            ?>
        </div>
    </nav>
    
    
</body>
</html>