<?php
session_start();
if ($_SESSION["isConnected"] == 1) {
    header("Location: index.php");
}
?>

<form action="check_login.php" method="POST">
    <div>
        <label for="mail">E-mail :</label>
        <input name="mail" type="email">
    </div>
    <div>
        <label for="password">Password :</label>
        <input name="password" type="password">
    </div>
    <div>
        <input type="submit" value="submit">
    </div>
</form>