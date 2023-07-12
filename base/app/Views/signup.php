<?php



?>

<form action="" method="POST">
    <fieldset>
        <legend>Registration</legend>
        <input type="text" name="first_name" placeholder="Please, enter your first name" required />
        <br>
        <input type="text" name="last_name" placeholder="Please, enter your last name" required />
        <br>
        <input type="email" name="email" placeholder="Please, enter your E-mail" required />
        <br>
        <input type="password" name="password" placeholder="Please, enter your Password" required />
        <br>
        <input type="submit" name="submit" value="Register" />
    </fieldset>
</form>
<div class="error"></div>
<p> Already Registered ? <a href="login.php">Click here</a> </p>