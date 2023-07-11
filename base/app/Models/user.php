<?php
// declare(strict_types=1);
class User
{
    public int $id;
    public string $first_name;
    public int $role_id;
    public string $last_name;
    public string $email;
    public string $password;
    public string $creation_date;
    public string $update_date;

    public function __construct(int $id, string $first_name, int $role_id, string $last_name, string $email, string $password, string $creation_date, string $update_date)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->role_id = $role_id;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->creation_date = $creation_date;
        $this->update_date = $update_date;
    }

    public function getName(){
        return $this->first_name;
    }

    // Fonctions
    public function formatCreationDate($format = 'd/m/Y')
    {
        $creationDate = $this->creation_date;
        $creationDateTime = new DateTime($creationDate);
        $formattedCreationDate = $creationDateTime->format($format);

        return $formattedCreationDate;
    }
}
?>