<?php
session_start();
if ($_SESSION["isConnected"] == 1) {
    header("Location: index.php");
}
require_once APP . 'Core/connect.php';
require_once APP . 'Models/user.php';

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

        $query = "SELECT * FROM users WHERE email = " . $email;
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        $user = $result;

        if (!$user) {
            if (!$user || !$password) {
                return false;
            }
        }
        return $user;
    }
}

// $userController = new UserController($db);
// if (isset($_POST["mail"]) && isset($_POST["password"])) {
//     $currentUser = new User(0, null, 0, null, $_POST["mail"], $_POST["password"], null, null);
//     $user = $userController->compareUser($currentUser);
//     if ($user == false) {
//         echo 'KO';
//         $_SESSION["isConnected"] = 0;
//     }
//     echo 'OK';
//     $_SESSION["isConnected"] = 1;
//     header("Location: index.php");
//     // require_once APP . 'Views/welcome.php';
// }

// require_once APP . "Views/check_login.php";


// $contactController = new ContactController($db);
// $contacts = $contactController->getContacts();

?>