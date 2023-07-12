<?php
// session_start();
// if ($_SESSION["isConnected"] == 1) {
//     header("Location: index.php");
// }
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/cogip/base/public/assets/css/main.css" rel="stylesheet" type="text/css">
    <script src="/cogip/base/public/assets/js/validate.js" defer></script>
</head>

<body class="login">
    <section class="login__section">
        <div class="login__section__card">
            <form class="login__section__card__form" action="index.php?route=user" method="POST">
                <h2>COGIP</h2>
                <h3>Login</h3>
                <div>
                    <label for="mail">E-mail :</label>
                    <input name="mail" type="email">
                </div>
                <div>
                    <label for="password">Password :</label>
                    <input name="password" type="password">
                </div>
                <div id="error"></div>
                <div>
                    <input class="submit" type="submit" value="submit">
                </div>
              <p> Not registered yet? <a href="index.php?route=signup">sign up HERE</a> </p>
            </form>
            <div class="login__section__card__image"></div>
        </div>
    </section>


</body>

</html>

<p> Not registered yet? <a href="index.php?route=signup">sign up HERE</a> </p>

