<?php
require_once APP . 'Core/connect.php';
require_once APP . 'Models/invoice.php';

class invoiceController
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
    public function getinvoices()
    {
        $query = "SELECT * FROM invoices";
        $statement = $this->db->prepare($query);
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
    public function getInvoiceById($invoiceId)
    {
        $query = "SELECT * FROM invoices WHERE id = :invoiceId";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':invoiceId', $invoiceId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        $company = $result['id_company'];

        $queryCompany = "SELECT name FROM companies WHERE id = ".$company;
        $statementCompany = $this->db->query($queryCompany);
        $statementCompany->execute();
        $resultCompany = $statementCompany->fetch(PDO::FETCH_ASSOC);

        $invoice = new Invoice(
            $result['id'],
            $result['ref'],
            $result['due_date'],
            $resultCompany['name'],
            $result['created_at'],
            $result['updated_at']
        );
        return $invoice;
    }
}

$invoiceController = new invoiceController($db);

if (isset($_GET['invoiceId'])) {
    $invoiceId = $_GET['invoiceId'];
    $invoice = $invoiceController->getInvoiceById($invoiceId);

    require_once APP . 'Views/show_invoices.php';
}else{
    $invoices = $invoiceController->getinvoices();

    require_once APP . 'Views/invoices.php';
}