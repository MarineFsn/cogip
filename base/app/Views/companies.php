<?php
echo 'companies<br>';
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