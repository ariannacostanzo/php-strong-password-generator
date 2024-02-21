<?php 
 
//funzioni

function create_random_password($amount, $array) {
    $generated_password = '';

    for ($i = 0; $i <= $amount; $i++) {
        $element = get_random_number($array);
        $generated_password .= $array[$element];
    }
    return $generated_password;
}

function get_random_number($array) {
    return  rand(0, count($array) - 1);
}

?>