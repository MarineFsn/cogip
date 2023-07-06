<?php
class type
{
    private $id;
    private $name;
    private $createdAt;
    private $updatedAt;

    public function __construct($id, $name, $createdAt, $updatedAt)
    {
        $this->id = $id;
        $this->name = $name;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}

?>