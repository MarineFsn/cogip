<?php

require_once APP . 'Core/connect.php';
require_once APP . 'Models/contact.php';

class ContactController
{
    private $db;


    public function getContact()
    {
        $this->db->connect();

        $query = "SELECT * FROM contacts";
        $result = $this->db->query($query);

        $contacts = array();

        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $contact = new contact(
                    $row['id'],
                    $row['name'],
                    $row['company_id'],
                    $row['email'],
                    $row['phone'],
                    $row['created_at'],
                    $row['updated_at']
                );
                $contacts[] = $contact;
            }
        }
        return $contacts;
    }
}

// $controller = new ContactController();
// $contact = $controller->getContact();

// foreach ($contacts as $contact) {
//     echo "ID: " . $contact->id . "<br>";
//     echo "Name: " . $contact->name . "<br>";
//     echo "Company: " . $contact->company . "<br>";
//     echo "E-mail: " . $contact->email . "<br>";
//     echo "Phone number: " . $contact->phone . "<br>";
//     echo "Creation date: " . $contact->created_at . "<br>";
//     echo "<br>";
// }


require_once APP . 'Views/contacts.php';
?>