<?php 
 
//funzioni

function create_random_password($amount, $array, $rep) {
    $generated_password = '';

    for ($i = 0; $i < $amount; $i++) {
        //genero un index da 0 alla length dell'array dato
        $element = get_random_number($array);

        //se ripetizione è no
        while ($rep === 'no' && str_contains($generated_password, $array[$element])) {
            //ripesco un altro index
            $element = get_random_number($array);
        }

        //costruisco la stringa
        $generated_password .= $array[$element];
    }
    return $generated_password;
}

function get_random_number($array) {
    return  rand(0, count($array) - 1);
}

//non funziona se passo la funzione 
// function push_in_array($array_to_cycle_in, $array_to_push_in) {
//     foreach($array_to_cycle_in as $element) {
//         array_push($array_to_push_in, $element);
//     }
// }

?>