<?php
require_once APP . 'Core/connect.php';
require_once APP . 'Models/company.php';
require_once APP . 'Models/contact.php';
require_once APP . 'Models/invoice.php';



class DashboardController
{
    /* Variables */
    private $db;

    /* Functions */
    // Database
    public function __construct($db)
    {
        $this->db = $db;
    }

    // READ 
    public function getCompanies()
    {
        $query = "SELECT * FROM companies";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        $companies = array();

        foreach ($result as $row) {
            $type = $row['type_id'];
            $queryTypes = "SELECT name FROM types WHERE id = " . $type;
            $statementTypes = $this->db->query($queryTypes);
            $statementTypes->execute();
            $resultTypes = $statementTypes->fetch(PDO::FETCH_ASSOC);

            $company = new Company(
                $row['id'],
                $row['name'],
                $resultTypes['name'],
                $row['country'],
                $row['tva'],
                $row['created_at'],
                $row['updated_at']
            );
            $companies[] = $company;
        }

        return $companies;
    }
    public function getContacts()
    {
        $query = "SELECT * FROM contacts";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        $contacts = array();

        foreach ($result as $row) {
            $company = $row['company_id'];

            $queryCompany = "SELECT name FROM companies WHERE id = " . $company;
            $statementCompany = $this->db->query($queryCompany);
            $statementCompany->execute();
            $resultCompany = $statementCompany->fetch(PDO::FETCH_ASSOC);

            $contact = new Contact(
                $row['id'],
                $row['name'],
                $resultCompany['name'],
                $row['email'],
                $row['phone'],
                $row['created_at'],
                $row['updated_at']
            );
            $contacts[] = $contact;
        }

        return $contacts;
    }
    public function getinvoices()
    {
        $query = "SELECT * FROM invoices";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        $invoices = array();

        foreach ($result as $row) {
            $company = $row['id_company'];

            $queryCompany = "SELECT name FROM companies WHERE id = " . $company;
            $statementCompany = $this->db->query($queryCompany);
            $statementCompany->execute();
            $resultCompany = $statementCompany->fetch(PDO::FETCH_ASSOC);

            $invoice = new invoice(
                $row['id'],
                $row['ref'],
                $row['due_date'],
                $resultCompany['name'],
                $row['created_at'],
                $row['updated_at']
            );
            $invoices[] = $invoice;
        }

        return $invoices;
    }
    public function getLastCompanies()
    {
        $query = "SELECT * FROM companies ORDER BY id DESC";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        $companies = array();

        for ($i = 0; $i < 5; $i++) {
            $type = $result[$i]['type_id'];
            $queryTypes = "SELECT name FROM types WHERE id = " . $type;
            $statementTypes = $this->db->query($queryTypes);
            $statementTypes->execute();
            $resultTypes = $statementTypes->fetch(PDO::FETCH_ASSOC);

            $company = new Company(
                $result[$i]['id'],
                $result[$i]['name'],
                $resultTypes['name'],
                $result[$i]['country'],
                $result[$i]['tva'],
                $result[$i]['created_at'],
                $result[$i]['updated_at']
            );
            $companies[] = $company;
        }

        return $companies;
    }
    public function getLastContacts()
    {
        $query = "SELECT * FROM contacts ORDER BY id DESC";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        $contacts = array();

        for ($i = 0; $i < 5; $i++) {
            $company = $result[$i]['company_id'];
            $queryCompany = "SELECT name FROM companies WHERE id = " . $company;
            $statementCompany = $this->db->query($queryCompany);
            $statementCompany->execute();
            $resultCompany = $statementCompany->fetch(PDO::FETCH_ASSOC);

            $contact = new Contact(
                $result[$i]['id'],
                $result[$i]['name'],
                $resultCompany['name'],
                $result[$i]['email'],
                $result[$i]['phone'],
                $result[$i]['created_at'],
                $result[$i]['updated_at']
            );
            $contacts[] = $contact;
        }

        return $contacts;
    }
    public function getLastInvoices()
    {

        $query = "SELECT * FROM invoices ORDER BY id DESC";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        $invoices = array();

        for ($i = 0; $i < 5; $i++) {
            $company = $result[$i]['id_company'];
            $queryCompany = "SELECT name FROM companies WHERE id = " . $company;
            $statementCompany = $this->db->query($queryCompany);
            $statementCompany->execute();
            $resultCompany = $statementCompany->fetch(PDO::FETCH_ASSOC);

            $invoice = new invoice(
                $result[$i]['id'],
                $result[$i]['ref'],
                $result[$i]['due_date'],
                $resultCompany['name'],
                $result[$i]['created_at'],
                $result[$i]['updated_at']
            );
            $invoices[] = $invoice;
        }

        return $invoices;
    }
    public function countInvoices()
    {
        $newquery = "SELECT COUNT(*) as 'total' FROM invoices";
        $statement = $this->db->prepare($newquery);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
    public function countContacts()
    {
        $newquery = "SELECT COUNT(*) as 'total' FROM contacts";
        $statement = $this->db->prepare($newquery);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
    public function countCompanies()
    {
        $newquery = "SELECT COUNT(*) as 'total' FROM companies";
        $statement = $this->db->prepare($newquery);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
    // FORMS 
    public function getCompaniesNames()
    {
        $query = "SELECT id, name FROM companies";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        $companies = array();

        foreach ($result as $row) {
            $companyName = $row['name'];
            $companyId = $row['id'];
            $companiesNames[] = $companyName;
            $companiesIds[] = $companyId;
        }

        return [$companiesIds, $companiesNames];
    }
    public function getTypesNames()
    {
        $query = "SELECT name FROM types";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        $types = array();

        foreach ($result as $row) {
            $typeName = $row['name'];
            $typesNames[] = $typeName;
        }

        return $typesNames;
    }

    // CREATE
    public function addInvoice($reference, $dueDate, $companyId)
    {
        $query = "INSERT INTO invoices (ref, id_company, due_date, created_at, updated_at)
              VALUES (:ref, :id_company, :due_date, NOW(), NOW())";
        $statement = $this->db->prepare($query);

        $statement->bindValue(':ref', $reference);
        $statement->bindValue(':due_date', $dueDate);
        $statement->bindValue(':id_company', $companyId);

        $statement->execute();

    }

    // UPDATES
    public function updateCompany($name, $type, $country, $tva, $id)
    {
        $updated_at = date('Y-m-d H:i:s');
        $type_id = $type;

        $query = "UPDATE companies SET name = :name, type_id = :type_id, country = :country, tva = :tva, updated_at = :updated_at WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':type_id', $type_id);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':tva', $tva);
        $stmt->bindParam(':updated_at', $updated_at);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function updateInvoice($ref, $company, $due_date, $id)
    {
        $updated_at = date('Y-m-d H:i:s');
        $id_company = $company;

        $query = "UPDATE invoices SET ref = :ref, id_company = :id_company, due_date = :due_date, updated_at = :updated_at WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':ref', $ref);
        $stmt->bindParam(':id_company', $id_company);
        $stmt->bindParam(':due_date', $due_date);
        $stmt->bindParam(':updated_at', $updated_at);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function updateContact($name, $company, $email, $phone, $id)
    {
        $updated_at = date('Y-m-d H:i:s');
        $company_id = $company;

        $query = "UPDATE contacts SET name = :name, company_id = :company_id, email = :email, phone = :phone, updated_at = :updated_at WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':company_id', $company_id);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':updated_at', $updated_at);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // DELETE 
    public function deleteCompany($id)
    {
        $query = "DELETE FROM companies WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function deleteInvoice($id)
    {
        $query = "DELETE FROM invoices WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function deleteContact($id)
    {
        $query = "DELETE FROM contacts WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}

$dashboardController = new DashboardController($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // CREATE
    if (isset($_POST['reference']) && isset($_POST['due_date']) && isset($_POST['choices'])) {
        $reference = $_POST['reference'];
        $dueDate = $_POST['due_date'];
        $companyId = $_POST['choices'];

        $dashboardController->addInvoice($reference, $dueDate, $companyId);
    }
    // UPDATE
    if (isset($_GET['companyId']) && !empty($_GET['companyId'])) {
        $dashboardController->updateCompany($_POST['name'], $_POST['type'], $_POST['country'], $_POST['tva'], $_GET['companyId']);
    } else if (isset($_GET['contactId']) && !empty($_GET['contactId'])) {
        echo 'ok';
        $dashboardController->updateContact($_POST['name'], $_POST['company'], $_POST['email'], $_POST['phone'], $_GET['contactId']);
    } else if (isset($_GET['invoiceId']) && !empty($_GET['invoiceId'])) {
        echo 'ok';
        $dashboardController->updateInvoice($_POST['reference'], $_POST['company'], $_POST['due_date'], $_GET['invoiceId']);
    }
} else {
    // DELETE
    if (isset($_GET['companyId']) && !empty($_GET['companyId'])) {
        $dashboardController->deleteCompany($_GET['companyId']);
    } else if (isset($_GET['contactId']) && !empty($_GET['contactId'])) {
        $dashboardController->deleteContact($_GET['contactId']);
    } else if (isset($_GET['invoiceId']) && !empty($_GET['invoiceId'])) {
        $dashboardController->deleteInvoice($_GET['invoiceId']);
    }
}

// READ
$companies = $dashboardController->getCompanies();
$contacts = $dashboardController->getContacts();
$invoices = $dashboardController->getinvoices();
$lastInvoices = $dashboardController->getLastInvoices();
$lastContacts = $dashboardController->getLastContacts();
$lastCompanies = $dashboardController->getLastCompanies();
$countInvoices = $dashboardController->countInvoices();
$countContacts = $dashboardController->countContacts();
$countCompanies = $dashboardController->countCompanies();
[$companiesIds, $companiesNames] = $dashboardController->getCompaniesNames();
$typesNames = $dashboardController->getTypesNames();

require_once APP . "Views/dashboard.php";

?>