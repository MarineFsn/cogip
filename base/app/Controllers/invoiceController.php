<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once APP . 'Core/connect.php';
require_once APP . 'Models/invoice.php';

class invoiceController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getinvoices()
    {

        $query = "SELECT * FROM invoices";
        $statement = $this->db->prepare($query);
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

$invoiceController = new invoiceController($db);
$invoices = $invoiceController->getinvoices();


require_once APP . 'Views/invoices.php';

?>