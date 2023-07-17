<?php
require_once APP . 'Core/connect.php';
require_once APP . 'Models/contact.php';

class ContactController
{
    /* Variables */
    private $db;

    /* Functions */
    // Database
    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get functions
    public function getContacts()
    {
        $query = "SELECT * FROM contacts";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        $contacts = array();

        foreach ($result as $row) {
            $company = $row['company_id'];

            $queryCompany = "SELECT name FROM companies WHERE id = ".$company;
            $statementCompany = $this->db->query($queryCompany);
            $statementCompany->execute();
            $resultCompany = $statementCompany->fetch(PDO::FETCH_ASSOC);

            $contact = new Contact(
                $row['id'],
                $row['name'],
                $resultCompany['name'],
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

        $company = $result['company_id'];

        $queryCompany = "SELECT name FROM companies WHERE id = ".$company;
        $statementCompany = $this->db->query($queryCompany);
        $statementCompany->execute();
        $resultCompany = $statementCompany->fetch(PDO::FETCH_ASSOC);

        $contact = new Contact(
            $result['id'],
            $result['name'],
            $resultCompany['name'],
            $result['email'],
            $result['phone'],
            $result['created_at'],
            $result['updated_at']
        );
        return $contact;
    }
}

$contactController = new ContactController($db);

if (isset($_GET['contactId'])) {
    $contactId = $_GET['contactId'];
    $contact = $contactController->getContactById($contactId);

    require_once APP . 'Views/show_contact.php';
}else{
    $contacts = $contactController->getContacts();

    require_once APP . 'Views/contacts.php';
}