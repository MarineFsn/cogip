<?php
// require_once APP . 'Core/Controller.php';
require_once APP . 'Core/connect.php';
require_once APP . 'Models/company.php';
require_once APP . 'Models/contact.php';
require_once APP . 'Models/invoice.php';



class HomeController
{
    // public function index()
    // {
    //     return $this->view('welcome', ["name" => "Cogip"]);
    // }

    /* Variables */
    private $db;

    /* Functions */
    // Database
    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get functions
    public function getLastCompanies()
    {
        $query = "SELECT * FROM companies ORDER BY id DESC";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        $companies = array();

        for($i = 0; $i <5; $i++){
            $type = $result[$i]['type_id'];
            $queryTypes = "SELECT name FROM types WHERE id = ".$type;
            $statementTypes = $this->db->query($queryTypes);
            $statementTypes->execute();
            $resultTypes = $statementTypes->fetch(PDO::FETCH_ASSOC);

            $company = new Company(
                $result[$i]['id'],
                $result[$i]['name'],
                $resultTypes['name'],
                $result[$i]['country'],
                $result[$i]['tva'],
                $result[$i]['created_at'],
                $result[$i]['updated_at']
            );
            $companies[] = $company;
        }

        return $companies;
    }
    public function getLastContacts()
    {
        $query = "SELECT * FROM contacts ORDER BY id DESC";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        $contacts = array();

        for($i = 0; $i <5; $i++){
            $company = $result[$i]['company_id'];
            $queryCompany = "SELECT name FROM companies WHERE id = ".$company;
            $statementCompany = $this->db->query($queryCompany);
            $statementCompany->execute();
            $resultCompany = $statementCompany->fetch(PDO::FETCH_ASSOC);

            $contact = new Contact(
                $result[$i]['id'],
                $result[$i]['name'],
                $resultCompany['name'],
                $result[$i]['email'],
                $result[$i]['phone'],
                $result[$i]['created_at'],
                $result[$i]['updated_at']
            );
            $contacts[] = $contact;
        }

        return $contacts;
    }
    public function getLastInvoices()
    {

        $query = "SELECT * FROM invoices ORDER BY id DESC";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        $invoices = array();

        for($i = 0; $i <5; $i++){
            $company = $result[$i]['id_company'];
            $queryCompany = "SELECT name FROM companies WHERE id = ".$company;
            $statementCompany = $this->db->query($queryCompany);
            $statementCompany->execute();
            $resultCompany = $statementCompany->fetch(PDO::FETCH_ASSOC);

            $invoice = new invoice(
                $result[$i]['id'],
                $result[$i]['ref'],
                $result[$i]['due_date'],
                $resultCompany['name'],
                $result[$i]['created_at'],
                $result[$i]['updated_at']
            );
            $invoices[] = $invoice;
        }

        return $invoices;
    }
}

$HomeController = new HomeController($db);
$invoices = $HomeController->getLastInvoices();
$contacts = $HomeController->getLastContacts();
$companies = $HomeController->getLastCompanies();


require_once APP . 'Views/welcome.php';