<?php

require '../Core/connect.php';
require '../Models/company.php';

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


foreach ($companies as $company) {
    echo "ID: " . $company->id . "<br>";
    echo "Nom: " . $company->name . "<br>";
    echo "Type: " . $company->type . "<br>";
    echo "Pays: " . $company->country . "<br>";
    echo "TVA: " . $company->tva . "<br>";
    echo "Date de mise à jour: " . $company->update_date . "<br>";
    echo "<br>";
}

?>