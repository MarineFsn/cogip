<?php

require './Core/connect.php';
require '../Models/invoice.php';

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
                    $row['company'],
                    $row['created_at'],
                    $row['updated_at']
                );
                $invoices[] = $invoice;
            }
        }
        return $invoices;
    }
}

?>