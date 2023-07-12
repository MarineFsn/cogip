<?php


?>

<form action="index.php?route=user" method="POST">
    <label for="first_name">First Name :</label>
    <input type="text" name="first_name" placeholder="Please, enter your first name" required />
    <br>
    <label for="last_name">Last Name :</label>
    <input type="text" name="last_name" placeholder="Please, enter your last name" required />
    <br>
    <label for="mail">E-mail :</label>
    <input type="email" name="mail" placeholder="Please, enter your E-mail" required />
    <br>
    <label for="password">Password :</label>
    <input type="password" name="password" placeholder="Please, enter your Password" required />
    <br>
    <input type="submit" name="submit" value="Register" />
</form>
<p> Already Registered ? <a href="index.php?route=login">Login</a> </p>


