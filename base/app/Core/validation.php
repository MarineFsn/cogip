<?php
$first_name = $last_name = $email = $password = '';
$first_nameError = $last_nameError = $emailError = $passwordError = '';

function sanitizeInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;

}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['first_name']) && isset($_POST['last_name'])) {
        $first_name = sanitizeInput($_POST['first_name']);
        $last_name = sanitizeInput($_POST['last_name']);
        $email = sanitizeInput($_POST['mail']);
        $password = sanitizeInput($_POST['password']);


        if (empty($first_name)) {
            $first_nameError = 'Firstname is required';
        } elseif (strlen($first_name) < 2) {
            $first_nameError = 'Firstname must be at least 2 characters long';
        }

        if (empty($last_name)) {
            $last_nameError = 'Lastname is required';
        } elseif (strlen($last_name) < 2) {
            $last_nameError = 'Lastname must be at least 2 characters long';
        }

        if (empty($email)) {
            $emailError = 'Email is required';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = 'Invalid email address';
        }

        if (empty($password)) {
            $passwordError = 'password is required';
        } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
            $passwordError = 'Password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character';
        }
    } else {
        $email = sanitizeInput($_POST['mail']);
        $password = sanitizeInput($_POST['password']);


        if (empty($email)) {
            $emailError = 'Email is required';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = 'Invalid email address';
        }

        if (empty($password)) {
            $passwordError = 'password is required';
        } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
            $passwordError = 'Password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character';
        }
    }
}
?>