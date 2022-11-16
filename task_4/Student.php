<?php

class Student extends User
{
    private $cource = 1;

    public function setCource($cource)
    {
        $this->cource = $cource;
    }

    public function getCource()
    {
        return $this->cource;
    }
}