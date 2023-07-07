<?php

require_once APP . 'Core/connect.php';
require_once APP . 'Models/company.php';

class CompanyController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getCompanies()
    {
        $query = "SELECT * FROM companies";
        $statement = $this->db->prepare($query);
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
}

$companyController = new CompanyController($db);
$companies = $companyController->getCompanies();

require_once APP . 'Views/companies.php';

?>