<?php
    // declare(strict_types=1);
    class Contact
    {
        public int $id;
        public string $name;
        public int $company;
        public string $email;
        public string $phone;
        public string $creation_date;
        public string $update_date;

        public function __construct(int $id, string $name, int $company, string $email, string $phone, string $creation_date, string $update_date){
            $this->id = $id;
            $this->name = $name;
            $this->company = $company;
            $this->email = $email;
            $this->phone = $phone;
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