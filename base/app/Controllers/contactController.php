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

    public function getContacts()
    {
        $query = "SELECT * FROM contacts";
        $statement = $this->db->prepare($query);
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

    public function getContactById($contactId)
    {
        $query = "SELECT * FROM contacts WHERE id = :contactId";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':contactId', $contactId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if (!$result) {
        }
        $contact = new Contact(
            $result['id'],
            $result['name'],
            $result['company_id'],
            $result['email'],
            $result['phone'],
            $result['created_at'],
            $result['updated_at']
        );
        return $contact;
    }
}

$contactController = new ContactController($db);
$contacts = $contactController->getContacts();

if (isset($_GET['contact_id'])) {
    $contactId = $_GET['contact_id'];
    $contact = $contactController->getContactById($contactId);
}

require_once APP . 'Views/contacts.php';
require_once APP . 'Views/show_contact.php';
