<?php

require_once APP . 'Core/connect.php';
require_once APP . 'Models/company.php';

class CompanyController
{
    private $db;

    public function getCompanies()
    {
        $this->db = connect();

        $query = "SELECT * FROM companies";
        $result = $this->db->query($query);

        $companies = array();

        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
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

$controllercontact = new CompanyController();
$companies = $controllercontact->getCompanies();

require_once APP . 'Views/companies.php';
