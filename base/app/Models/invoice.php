<?php
// declare(strict_types=1);
class Invoice
{
    public int $id;
    public string $ref;
    public string $company;
    public string $creation_date;
    public string $update_date;
    public string $due_dates;

    public function __construct(int $id, string $ref, string $due_dates, string $company, string $creation_date, string $update_date, )
    {
        $this->id = $id;
        $this->ref = $ref;
        $this->due_dates = $due_dates;
        $this->company = $company;
        $this->creation_date = $creation_date;
        $this->update_date = $update_date;

    }

    public function formatDueDate($format = 'd/m/Y')
    {
        $dueDate = $this->due_dates;
        $dueDateTime = new DateTime($dueDate);
        $formattedDueDate = $dueDateTime->format($format);

        return $formattedDueDate;
    }
    
    public function formatCreationDate($format = 'd/m/Y')
    {
        $creationDate = $this->creation_date;
        $creationDateTime = new DateTime($creationDate);
        $formattedCreationDate = $creationDateTime->format($format);

        return $formattedCreationDate;
    }

    // public function formatUpdateDate($format = 'd/m/Y'){
    //     $updateDate = $this->update_date;
    //     $updateDateTime = new DateTime($updateDate);
    //     $formattedUpdateDate = $updateDateTime->format($format);

    //     return $formattedUpdateDate;
    // }
}

?>

