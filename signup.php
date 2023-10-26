<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="login.css">
    <title>capyboxd - sign up</title>
</head>
<body>
    
    <nav>
        <div id="logo"><img src="https://drive.google.com/uc?export=view&id=1M-AQTsnmeQrlnsemxz0IRZfEHuDNi-D8" width="640" height="480"></img></div>
    </nav>

    <section>
        <div id="wrap">
            <div id="form-title">
                <img src="https://drive.google.com/uc?export=view&id=1jENZXZNVK8IJcRT74BWWf1KIsLZwcXX6" alt="">
                <p>WELCOME</p>
            </div>
            <form action="process-form.php" method="post">
                <div class="input-field">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    <div class="errorMessage" id="email-error-message"></div>
                </div>
                
                <div class="input-field">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <div class="errorMessage" id="password-error-message"></div>
                </div>
                
                <div class="input-field">
                    <input type="password" id="confirmPassword" placeholder="Confirm Password" required>
                    <div class="errorMessage" id="confirmPassword-error-message"></div>
                </div>
                
                <div class="input-field">
                    <input type="submit" value="create new account" name="createNewAccount" style="background-color: black; color: white;" required>
                </div>
            </form>
            <div id="footer">
                <p>already have account? <a href="login.php">log in now</a></p>
            </div>
        </div>
    </section>
    <?php
    
    
    // if(isset($_POST["createNewAccount"])){
        
    //     require_once 'loginFunction.php';
    //     $email = $_POST["Email"];
    //     $password = $_POST["Password"];
    //     signUp($conn, $email, $password);

    // }
    // ?>

</body>

<script>

    var submitButton = document.querySelector('input[type="submit"]');
    var emailErrorMessage = document.getElementById('email-error-message');
    var passwordErrorMessage = document.getElementById('password-error-message');
    var confirmPasswordErrorMessage = document.getElementById('confirmPassword-error-message');

    function validateForm() {
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirmPassword').value;

        // Check email format
        var isEmailValid = email.indexOf('@') !== -1 && email.indexOf('.com') !== -1;

        // Password must contain at least one uppercase letter, one number, and one symbol
        var passwordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        var isPasswordValid = passwordRegex.test(password);

        // Check if password and confirm password match
        var doPasswordsMatch = password === confirmPassword;

        // Show error messages
        emailErrorMessage.innerHTML = '';
        passwordErrorMessage.innerHTML = '';
        confirmPasswordErrorMessage.innerHTML = '';

        if (!isEmailValid) {
            emailErrorMessage.innerHTML += 'Email must be a valid email address.';
        }
        if (!isPasswordValid) {
            passwordErrorMessage.innerHTML += 'Password must be 8-12 characters including one uppercase letter, one number, and one symbol.';
        }
        if (!doPasswordsMatch) {
            confirmPasswordErrorMessage.innerHTML += 'Passwords do not match.';
        }

        // Enable or disable submit button based on validation
        if (isEmailValid && isPasswordValid && doPasswordsMatch) {
            submitButton.disabled = false;
        } else {
            submitButton.disabled = true;
        }
    }

    document.getElementById('email').addEventListener('input', validateForm);
    document.getElementById('password').addEventListener('input', validateForm);
    document.getElementById('confirmPassword').addEventListener('input', validateForm);
</script>
</html>