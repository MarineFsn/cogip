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
            $company = new Company(
                $row['id'],
                $row['name'],
                $row['type_id'],
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

    public function getinvoices($query = "SELECT * FROM invoices")
    {

        $newquery = $query;
        $statement = $this->db->prepare($newquery);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        $invoices = array();

        foreach ($result as $row) {
            $invoice = new invoice(
                $row['id'],
                $row['ref'],
                $row['due_date'],
                $row['id_company'],
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