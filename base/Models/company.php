<?php
    // declare(strict_types=1);
    class Company
    {
        public int $id;
        public string $name;
        public int $type;
        public string $country;
        public string $tva;
        public string $creation_date;
        public string $update_date;

        public function __construct(int $id, string $name, int $type, string $country, string $tva, string $creation_date, string $update_date){
            $this->id = $id;
            $this->name = $name;
            $this->type = $type;
            $this->country = $country;
            $this->tva = $tva;
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