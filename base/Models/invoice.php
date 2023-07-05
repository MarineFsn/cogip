<?php
    // declare(strict_types=1);
    class Invoice
    {
        public int $id;
        public string $ref;
        public int $company;
        public string $creation_date;
        public string $update_date;

        public function __construct(int $id, string $ref, int $company, string $creation_date, string $update_date){
            $this->id = $id;
            $this->ref = $ref;
            $this->company = $company;
            $this->creation_date = $creation_date;
            $this->update_date = $update_date;
        }

        public function formatCreationDate($format = 'd/m/Y'){
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