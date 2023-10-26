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
                <p>NEW PASSWORD</p>
            </div>
            <form action="home.php">
                <div class="input-field">
                    <input type="password" placeholder="new password" required>
                </div>
                <div class="input-field">
                    <input type="password" placeholder="confirm new password" required>
                </div>
                <div class="input-field">
                    <input type="submit" value="change now" style="background-color: black; color: white;">
                </div>
            </form>
            <div id="footer">
                <a href="login.php">back</a>
            </div>
        </div>
    </section>
    

</body>
</html>