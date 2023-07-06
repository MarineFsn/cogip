<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once APP . 'Core/connect.php';
require_once APP . 'Models/invoice.php';

class invoiceController
{
    private $db;

    public function getinvoices()
    {
        $this->db->connect();


        $query = "SELECT * FROM invoices";
        $result = $this->db->query($query);

        $invoices = array();

        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $invoice = new invoice(
                    $row['id'],
                    $row['ref'],
                    $row['id_company'],
                    $row['created_at'],
                    $row['updated_at']
                );
                $invoices[] = $invoice;
            }
        }
        return $invoices;
    }
}

require_once APP . 'Views/invoices.php';

?>