<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="navbar.css">
    <title>capyboxd - login</title>
</head>
<body>

    <nav>
        <div id="logo" style="cursor:pointer;"><img src="https://drive.google.com/uc?export=view&id=1M-AQTsnmeQrlnsemxz0IRZfEHuDNi-D8" width="640" height="480"></img></div>
    </nav>

    <section>
        <div id="wrap">
            <div id="form-title">
                <img src="https://drive.google.com/uc?export=view&id=1jENZXZNVK8IJcRT74BWWf1KIsLZwcXX6" alt="">
                <p>USER LOGIN</p>
            </div>
            <form action="loginFunction.php">
                <div class="input-field">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    <div class="errorMessage" id="email-error-message"></div>
                </div>
                <div class="input-field">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <div class="errorMessage" id="password-error-message"></div>
                </div>
                <div class="input-field">
                    <input type="submit" value="login now" style="background-color: black; color: white;">
                </div>
            </form>
            <div id="footer">
                <a href="forgot-password.php">forgot password</a>
                <a href="signup.php">sign up now</a>
            </div>
        </div>
    </section>

    <script>
    // Get a reference to the div element
    var clickableDiv = document.getElementById("logo");

    // Add a click event listener to the div
    clickableDiv.addEventListener("click", function() {
      // Redirect to another page when the div is clicked
      window.location.href = "http://localhost/index.php"; // Replace with the URL of the page you want to navigate to
    });


    //Checking Email and password
    var submitButton = document.querySelector('input[type="submit"]');
    var emailErrorMessage = document.getElementById('email-error-message');
    var passwordErrorMessage = document.getElementById('password-error-message');

    function validateForm() {
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        // Check email format
        var isEmailValid = email.indexOf('@') !== -1 && email.indexOf('.com') !== -1;

        // Password must contain at least one uppercase letter, one number, and one symbol
        var passwordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        var isPasswordValid = passwordRegex.test(password);


        // Show error messages
        emailErrorMessage.innerHTML = '';
        passwordErrorMessage.innerHTML = '';

        if (!isEmailValid) {
            emailErrorMessage.innerHTML += 'Email must be a valid email address.';
        }
        if (!isPasswordValid) {
            passwordErrorMessage.innerHTML += 'Password must be 8-12 characters including one uppercase letter, one number, and one symbol.';
        }

        // Enable or disable submit button based on validation
        if (isEmailValid && isPasswordValid) {
            submitButton.disabled = false;
        } else {
            submitButton.disabled = true;
        }
    }

    document.getElementById('email').addEventListener('input', validateForm);
    document.getElementById('password').addEventListener('input', validateForm);

    
  </script>

</body>
</html>