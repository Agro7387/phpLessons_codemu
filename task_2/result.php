<?php

require_once 'Arr.php';

// get summ instantly after creating object
$sum = (new Arr([1, 2, 3]))->getSum();

// chain methods call

$sum = (new Arr([9, 8, 7]))->addNum(4)->pushNums([3, 6])->getSum();