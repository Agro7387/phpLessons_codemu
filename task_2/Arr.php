<?php

class Arr
{
   public $numbers = [];

    public function __construct(array $numbers)
    {
        return $this->numbers;
    }

    public function addNum($number)
    {
        $this->numbers[] = $number;
        return $this;
    }

    public function pushNums(array $numbers)
    {
        $this->numbers = array_merge($this->numbers, $numbers);
        return $this;
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }
}
