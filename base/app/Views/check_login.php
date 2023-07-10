<?php
session_start();
// $userController = new UserController($db);
// if (isset($_POST["mail"]) && isset($_POST["password"])) {
//     echo 'OK 1';
//     $currentUser = new User(0, null, 0, null, $_POST["mail"], $_POST["password"], null, null);
//     $user = $userController->compareUser($currentUser);
//     if ($user == false) {
//         echo 'KO';
//         $_SESSION["isConnected"] = 0;
//     }
//     echo 'OK FINAL';
//     $_SESSION["isConnected"] = 1;
//     // header("Location: index.php");
//     // require_once APP . 'Views/welcome.php';
// }
echo $_POST['mail'];

?>