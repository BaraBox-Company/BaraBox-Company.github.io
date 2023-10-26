<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="login.css">
    <title>capyboxd - change password</title>
</head>
<body>
    <nav>
        <div id="logo"><img src="https://drive.google.com/uc?export=view&id=1M-AQTsnmeQrlnsemxz0IRZfEHuDNi-D8" width="640" height="480"></img></div>
    </nav>

    <section>
        <div id="wrap">
            <div id="form-title">
                <p>VERIFY EMAIL</p>
            </div>
            <form action="email_validate.php" method="post">
                <div class="input-field">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-field">
                    <input type="submit" value="verify" style="background-color: black; color: white;">
                </div>
            </form>
            <div id="footer">
                <a href="login.php">back</a>
            </div>
        </div>
    </section>
    

</body>

<script>

    var submitButton = document.querySelector('input[type="submit"]');
    var emailErrorMessage = document.getElementById('email-error-message');

    function validateForm() {
        var email = document.getElementById('email').value;

        // Check email format
        var isEmailValid = email.indexOf('@') !== -1 && email.indexOf('.com') !== -1;

        // Show error messages
        emailErrorMessage.innerHTML = '';

        if (!isEmailValid) {
            emailErrorMessage.innerHTML += 'Email must be a valid email address.<br>';
        }

        // Enable or disable submit button based on validation
        if (isEmailValid) {
            submitButton.disabled = false;
        } else {
            submitButton.disabled = true;
        }
    }

    document.getElementById('email').addEventListener('input', validateForm);
</script>
</html>