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

    public function getCompanies($query = "SELECT * FROM companies")
    {
        $newquery = $query;
        $statement = $this->db->prepare($newquery);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        // /////////////////
        // $count = $this->db->prepare('SELECT id FROM companies');
        // $count->execute();
        // $tCount = $count->fetchAll(PDO::FETCH_ASSOC);

        // $nbrElementsByPage = 10;
        // $nbrPages = ceil(count($tCount) / $nbrElementsByPage);
        // // echo $nbrPages;
        // ////////////////////////
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
    public function getCompanyById($companyId)
    {
        $query = "SELECT * FROM companies WHERE id = :companyId";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':companyId', $companyId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);


        $company = new Company(
            $result['id'],
            $result['name'],
            $result['type_id'],
            $result['country'],
            $result['tva'],
            $result['created_at'],
            $result['updated_at']
        );
        return $company;
    }
}

$companyController = new CompanyController($db);
$companies = $companyController->getCompanies();

require_once APP . 'Views/companies.php';
