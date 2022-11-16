<?php

require_once 'User.php';

$methods = [
    'method_1' => 'getName',
    'method_2' => 'getAge'
];
// get name and age from object using array $methods
$new_user = new User('Den', 35);

$new_user_name = $new_user->{$methods['method_1']};
$new_user_age = $new_user->{$methods['method_2']};