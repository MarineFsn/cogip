<?php
// require_once APP . 'Core/Controller.php';
require_once APP . 'Core/connect.php';
require_once APP . 'Models/company.php';
require_once APP . 'Models/contact.php';
require_once APP . 'Models/invoice.php';



class HomeController
{

    /*
     * return view
     */
    // public function index()
    // {
    //     return $this->view('welcome', ["name" => "Cogip"]);
    // }

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getCompanies($query = "SELECT * FROM companies")
    {
        $newquery = $query;
        $statement = $this->db->prepare($newquery);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        $companies = array();

        foreach ($result as $row) {
            $type = $row['type_id'];
            $queryTypes = "SELECT name FROM types WHERE id = ".$type;
            $statementTypes = $this->db->query($queryTypes);
            $statementTypes->execute();
            $resultTypes = $statementTypes->fetch(PDO::FETCH_ASSOC);

            $company = new Company(
                $row['id'],
                $row['name'],
                $resultTypes['name'],
                $row['country'],
                $row['tva'],
                $row['created_at'],
                $row['updated_at']
            );
            $companies[] = $company;
        }

        return $companies;
    }

    public function getContacts($query = "SELECT * FROM contacts")
    {
        $newquery = $query;
        $statement = $this->db->prepare($newquery);
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

    public function getinvoices($query = "SELECT * FROM invoices")
    {

        $newquery = $query;
        $statement = $this->db->prepare($newquery);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        $invoices = array();

        foreach ($result as $row) {
            $company = $row['id_company'];

            $queryCompany = "SELECT name FROM companies WHERE id = ".$company;
            $statementCompany = $this->db->query($queryCompany);
            $statementCompany->execute();
            $resultCompany = $statementCompany->fetch(PDO::FETCH_ASSOC);

            $invoice = new invoice(
                $row['id'],
                $row['ref'],
                $row['due_date'],
                $resultCompany['name'],
                $row['created_at'],
                $row['updated_at']
            );
            $invoices[] = $invoice;
        }

        return $invoices;
    }
}

$HomeController = new HomeController($db);
$invoices = $HomeController->getinvoices();
$contacts = $HomeController->getContacts();
$companies = $HomeController->getCompanies();


require_once APP . 'Views/welcome.php';