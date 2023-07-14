<?php
// session_start();
// if ($_SESSION["isConnected"] == 1) {
//     header("Location: index.php");
// }
require_once APP . 'Core/connect.php';
require_once APP . 'Models/user.php';
require_once APP . 'Models/userLog.php';

class UserController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getUsers($query = "SELECT * FROM users")
    {
        $newquery = $query;
        $statement = $this->db->prepare($newquery);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        $users = array();

        foreach ($result as $row) {
            $user = new User(
                $row['id'],
                $row['first_name'],
                $row['role_id'],
                $row['last_name'],
                $row['email'],
                $row['password'],
                $row['created_at'],
                $row['updated_at']
            );
            $users[] = $user;
        }

        return $users;
    }

    public function compareUser($currentUser)
    {
        $email = $currentUser->email;
        $password = $currentUser->password;

        $query = "SELECT * FROM users WHERE email = ? AND password = ?";
        $statement = $this->db->prepare($query);
        $statement->execute([$email, $password]);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        $user = $result;
        var_dump($user);

        if (!$user) {
            return false;
        }
        return $user;
    }

    public function addUser($first_name, $last_name, $password, $email)
    {
        $firstName = $first_name;
        $roleId = 3;
        $lastName = $last_name;
        $mail = $email;
        $pswd = $password;
        $createdAt = date('Y-m-d H:i:s');
        $updatedAt = date('Y-m-d H:i:s');

        $query = "INSERT INTO users (first_name, role_id, last_name, email, password, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $statement = $this->db->prepare($query);
        $statement->execute([$firstName, $roleId, $lastName, $mail, $pswd, $createdAt, $updatedAt]);

        $newquery = "SELECT id FROM users WHERE last_name = ? AND email = ?";
        $stmt = $this->db->prepare($newquery);
        $stmt->execute([$lastName, $mail]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $newUser = new User($result[0]['id'], $firstName, $lastName, $mail, $pswd, $createdAt, $updatedAt);

        return $newUser;
    }
}

$userController = new UserController($db);

if (isset($_POST["mail"]) && isset($_POST["password"])) {
    if (isset($_POST["first_name"]) && isset($_POST["last_name"])) {
        $currentUser = $userController->addUser($_POST["first_name"], $_POST["last_name"], $_POST["password"], $_POST["mail"]);
        $_SESSION["user"] = $currentUser;
        require_once APP . "Controllers/loginController.php";
    } else {
        $currentUserLog = new UserLog($_POST["mail"], $_POST["password"]);
        $currentUser = $userController->compareUser($currentUserLog);
        if ($currentUser == false) {
            $_SESSION["isConnected"] = 0;
            require_once APP . "Controllers/loginController.php";
        } else {
            $_SESSION["isConnected"] = 1;
            $_SESSION["user"] = $currentUser;
            require_once APP . "Controllers/HomeController.php";
        }
    }
}
// } elseif (isset($_POST["submit"])) {
//     $userController->addUser();
// }
?>