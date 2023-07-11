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
        // var_dump($user);

        if (!$user) {
            return false;
        }
        return $user;
    }
}

$userController = new UserController($db);
if (isset($_POST["mail"]) && isset($_POST["password"])) {
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
?>