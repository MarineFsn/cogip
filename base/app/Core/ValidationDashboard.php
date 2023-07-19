<?php


$referenceInvoice = $dueDateInvoice = $companyIdInvoice = '';
$referenceInvoiceError = $dueDateInvoiceError = $companyIdInvoiceError = '';

$nameCompany = $typeIdCompany = $countryCompany = $tvaCompany = '';
$nameCompanyError = $typeIdCompanyError = $countryCompanyError = $tvaCompanyError = '';

$nameContact = $companyIdContact = $emailContact = $phoneContact = '';
$nameContactError = $companyIdContactError = $emailContactError = $phoneContactError = '';

function sanitizedInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['reference']) && isset($_POST['due_date']) && isset($_POST['choices'])) {
        $referenceInvoice = sanitizedInput($_POST['reference']);
        $dueDateInvoice = sanitizedInput($_POST['due_date']);
        $companyIdInvoice = sanitizedInput($_POST['choices']);

        if (empty($referenceInvoice)) {
            $referenceInvoiceError = 'Reference is required';
        }

        if (empty($dueDateInvoice)) {
            $dueDateInvoiceError = 'Due date is required';
        }

        if (empty($companyIdInvoice)) {
            $companyIdInvoiceError = 'A company selection is required';
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && isset($_POST['choices']) && isset($_POST['country']) && isset($_POST['tva'])) {
        $nameCompany = sanitizedInput($_POST['name']);
        $typeIdCompany = sanitizedInput($_POST['choices']);
        $countryCompany = sanitizedInput($_POST['country']);
        $tvaCompany = sanitizedInput($_POST['tva']);

        if (empty($nameCompany)) {
            $nameCompanyError = 'Name is required';
        } elseif (strlen($nameCompany) < 2) {
            $nameCompanyError = 'Name must be at least 2 characters long';
        }

        if (empty($typeIdCompany)) {
            $typeIdCompanyError = 'A type selection is required';
        }

        if (empty($countryCompany)) {
            $countryCompanyError = 'Country is required';
        } elseif (strlen($countryCompany) < 2) {
            $countryCompanyError = 'Country must be at least 2 characters long';
        }

        if (empty($tvaCompany)) {
            $tvaCompanyError = 'TVA is required';
        } elseif (!preg_match('/^(?=.*[A-Za-z]{2})(?=.*[0-9]{9})[A-Za-z0-9]*$/', $tvaCompany)) {
            $tvaCompanyError = 'TVA must be 2 letters and 9 digits long';
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && isset($_POST['choices']) && isset($_POST['email']) && isset($_POST['phone'])) {
        $nameContact = sanitizedInput($_POST['name']);
        $companyIdContact = sanitizedInput($_POST['choices']);
        $emailContact = sanitizedInput($_POST['email']);
        $phoneContact = sanitizedInput($_POST['phone']);

        if (empty($nameContact)) {
            $nameContactError = 'Name is required';
        } elseif (strlen($nameContact) < 2) {
            $nameContactError = 'Name must be at least 2 characters long';
        }

        if (empty($companyIdContact)) {
            $companyIdContactError = 'A company selection is required';
        }

        if (empty($emailContact)) {
            $emailContactError = 'Email is required';
        } elseif (!filter_var($emailContact, FILTER_VALIDATE_EMAIL)) {
            $emailContactError = 'Invalid email address';
        }

        if (empty($phoneContact)) {
            $phoneContactError = 'Phone number is required';
        } elseif (!preg_match('/^\d+$/', $phoneContact)) {
            $phoneContactError = 'Phone number should only contain digits';
        }
    }
}

?>