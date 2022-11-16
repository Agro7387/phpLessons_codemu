<?php

class Driver extends Employee
{
    private $category = [];
    private $expirience;

    public function setExp($expirience)
    {
        $this->expirience=$expirience;
    }

    public function setCategory($category)
    {
        $this->category[] = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getExp()
    {
        return $this->expirience;
    }
}