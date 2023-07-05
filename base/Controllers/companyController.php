<?php

require 'connect.php';
require '../models/company.php';

class CompanyController
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

    public function getCompanies()
    {
        $this->db->connect();
        $connection = $this->db->getConnection();


        $query = "SELECT * FROM companies";
        $result = $connection->query($query);

        $companies = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
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
        }
        return $companies;
    }
}
?>