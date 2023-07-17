<?php
require_once APP . 'Core/connect.php';
require_once APP . 'Models/company.php';
require_once APP . 'Models/contact.php';
require_once APP . 'Models/invoice.php';

class CompanyController
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
    public function getCompanies()
    {
        $query = "SELECT * FROM companies";
        $statement = $this->db->prepare($query);
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
    public function getTypes()
    {
        $this->db->connect();
        $query = "SELECT name FROM types";
        $result = $this->db->query($query);

        $types = array();

        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $type = new type(
                    $row['id'],
                    $row['name'],
                    $row['created_at'],
                    $row['updated_at']
                );
                $types[] = $type;
            }
        }
        return $types;
    }
    public function getCompanyById($companyId)
    {
        $query = "SELECT * FROM companies WHERE id = :companyId";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':companyId', $companyId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        $type = $result['type_id'];

        $queryTypes = "SELECT name FROM types WHERE id = ".$type;
        $statementTypes = $this->db->query($queryTypes);
        $statementTypes->execute();
        $resultTypes = $statementTypes->fetch(PDO::FETCH_ASSOC);

        $company = new Company(
            $result['id'],
            $result['name'],
            $resultTypes['name'],
            $result['country'],
            $result['tva'],
            $result['created_at'],
            $result['updated_at']
        );

        return $company;
    }
    public function getInvoicesByCompanyId($companyId)
    {
        $query = "SELECT * FROM invoices WHERE id_company = :companyId";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':companyId', $companyId);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        $invoices = array();

        foreach ($result as $row) {
            $invoice = new Invoice(
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
    public function getContactsByCompanyId($companyId)
    {
        $query = "SELECT * FROM contacts WHERE company_id = :companyId";
        $statement = $this->db->prepare($query);
        $statement->bindValue(':companyId', $companyId, PDO::PARAM_INT);
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

$companyController = new CompanyController($db);

if (isset($_GET['companyId'])) {
    $companyId = $_GET['companyId'];
    $company = $companyController->getCompanyById($companyId);
    $contacts = $companyController->getContactsByCompanyId($companyId);
    $invoices = $companyController->getInvoicesByCompanyId($companyId);

    require_once APP . 'Views/show_company.php';
}else{
    $companies = $companyController->getCompanies();

    require_once APP . 'Views/companies.php';
}