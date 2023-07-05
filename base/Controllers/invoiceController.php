<?php

require 'connect.php';
require '../models/invoice.php';

class invoiceController
{
    private $db;

    public function __construct()
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "cogip";

        $this->db = new Database($host, $username, $password, $database);
    }

    public function getinvoices()
    {
        $this->db->connect();
        $connection = $this->db->getConnection();


        $query = "SELECT * FROM invoices";
        $result = $connection->query($query);

        $invoices = array();

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                $invoice = new invoice(
                    $row['id'],
                    $row['ref'],
                    $row['company'],
                    $row['creation_date'],
                    $row['update_date']
                );
                $invoices[] = $invoice;
            }
        }
        return $invoices;
    }
}

?>