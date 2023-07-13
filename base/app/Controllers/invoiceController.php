<?php
require_once APP . 'Core/connect.php';
require_once APP . 'Models/invoice.php';

class invoiceController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
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

    public function getInvoiceById($invoiceId)
    {
        $query = "SELECT * FROM invoices WHERE id = :invoiceId";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':invoiceId', $invoiceId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        $invoice = new Invoice(
            $result['id'],
            $result['ref'],
            $result['due_date'],
            $result['id_company'],
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