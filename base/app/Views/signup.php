<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/cogip/base/public/assets/css/main.css" rel="stylesheet" type="text/css">
</head>

<body class="signup">
    <section class="signup__section">
        <div class="signup__section__card">
            <form class="signup__section__card__form" action="" method="POST">
                <h2>COGIP</h2>
                <fieldset>
                    <legend>Registration</legend>
                    <input type="text" name="first_name" placeholder="First name" required />
                    <input type="text" name="last_name" placeholder="Last name" required />
                    <input type="email" name="email" placeholder="E-mail" required />
                    <input type="password" name="password" placeholder="Password" required />
                    <input type="submit" name="submit" value="Register" />
                    <p class="signup__section__card__form__registered"> Already Registered ? <a href="login.php">Login</a></p>
                </fieldset>
            </form>
            <div class="signup__section__card__image"></div>
        </div>
    </section>
    <div id="error"></div>
</body>

</html>