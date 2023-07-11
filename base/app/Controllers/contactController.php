<?php
require_once APP . 'Core/connect.php';
require_once APP . 'Models/contact.php';

class ContactController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getContacts($query = "SELECT * FROM contacts")
    {
        $newquery = $query;
        $statement = $this->db->prepare($newquery);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        $contacts = array();

        foreach ($result as $row) {
            $contact = new Contact(
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

        return $contacts;
    }
}

$contactController = new ContactController($db);
$contacts = $contactController->getContacts();

require_once APP . 'Views/contacts.php';
?>