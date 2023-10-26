<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="personal-info-form.css">
    <title>capyboxd - Welcome</title>
</head>
<body>
    <nav>
        <div id="logo"><img src="https://drive.google.com/uc?export=view&id=1M-AQTsnmeQrlnsemxz0IRZfEHuDNi-D8" width="640" height="480"></img></div>
    </nav>

    <section>
        <div id="wrap">

            <div id="form-title">
                <p>INFORMATION FORM</p>
            </div>
                <form action="home.php">
                    <div class="form-wrap">
                        <div class="input-field">
                            <input type="text" placeholder="Full Name" required>
                        </div>
                        <div class="input-field">
                            <input type="tel" placeholder="Phone Number (ex:012-3456789)" pattern="^(?:\+?6?01[0-46-9]-?\d{7}|(?:\+?6?[23456789]\d{8}|01[125-9]-?\d{6}|01[0-46-9]\d{7}))$" required>
                        </div>
                        
                        <div class="input-field">
                            <input type="text" placeholder="Address line 1" required>
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Address line 2">
                        </div>
                        
                    </div>
                    <div class="form-wrap">
                        
                        <div class="input-field">
                            <select id="country" name="country" required>
                                <option value="">Country</option>
                                <option value="my">Malaysia</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <select id="state" name="state" required>
                                <option value="">State</option>
                                <option value="johor">Johor</option>
                                <option value="kedah">Kedah</option>
                                <option value="kelantan">Kelantan</option>
                                <option value="melaka">Melaka (Malacca)</option>
                                <option value="negeri_sembilan">Negeri Sembilan</option>
                                <option value="pahang">Pahang</option>
                                <option value="perak">Perak</option>
                                <option value="perlis">Perlis</option>
                                <option value="penang">Pulau Pinang (Penang)</option>
                                <option value="selangor">Selangor</option>
                                <option value="terengganu">Terengganu</option>
                                <option value="sabah">Sabah</option>
                                <option value="sarawak">Sarawak</option>
                                <!-- Add more country options here -->
                            </select>
                        </div>
                        <div class="input-field">
                            <input type="number" placeholder="postal code" required>
                        </div>
                        <div class="input-field">
                            <input type="submit" value="done" style="background-color: black; color: white;" required>
                        </div>  
                        <div class="input-field">
                            <p><input type="checkbox" required> <a href="">terms and conditions</a></p>
                        </div>
                    </div>
                </form>
            
            
        </div>
    </section>

</body>
</html>