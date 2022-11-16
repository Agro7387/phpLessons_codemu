<?php

class Programmer extends Employee
{
    private $langs = [];

    public function setLang($lang)
    {
        $this->langs[] = $lang;
    }

    public function getLangs()
    {
        return $this->langs;
    }
}