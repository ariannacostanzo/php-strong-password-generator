<?php 

//funzioni
include __DIR__ . '/includes/functions/functions.php';

//arrays
include __DIR__ . '/includes/data/data.php';

$title = 'Generate your password';
//lunghezza
$length = $_GET['length'] ?? '';

//ripetizione caratteri
$repeat = $_GET['repetition'] ?? 'yes';

//tipi di caratteri
$c_letters = $_GET['letters'] ?? 'off';
$c_numbers = $_GET['numbers'] ?? 'off';
$c_symbols = $_GET['symbols'] ?? 'off';

//scelgo cosa voglio che il mio array abbia
$all_signs = [];

//devo spostare questo in un altro file?
//se tutto è off uso tutto
if ($c_letters === 'off' && $c_numbers === 'off' && $c_symbols === 'off') {
    $all_signs = array_merge($numbers , $letters_uppercase , $letters_lowercase , $symbols);
}

//se letters è on
if ($c_letters === 'on') {
    foreach($letters_lowercase as $letter_lower) {
        array_push($all_signs, $letter_lower);
    }
    foreach($letters_uppercase as $letter_upper) {
        array_push($all_signs, $letter_upper);
    }
} 
//se numbers è on
if ($c_numbers === 'on'){
    foreach($numbers as $number) {
        array_push($all_signs, $number);
    }
}
//se symbols è on
if ($c_symbols === 'on'){
    foreach($symbols as $symbol) {
        array_push($all_signs, $symbol);
    }
}

// quando ho inviato il form
if ($length) {

    //se non posso ripetere i miei caratteri e dunque non sono infiniti
    //se la lunghezza supera quella dell'array la forzo al suo massimo
    if ($repeat === 'no' && $length > count($all_signs)) {
        $length = count($all_signs);
    }

    //creo la password
    $password = create_random_password($length, $all_signs, $repeat);

    //salvo la password per portarla nell'altra pagina
    session_start();
    $_SESSION['password'] = $password;

    //mi sposto nella pagina di successo
    header('Location: success.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<!-------------------------- head ------------------------------->
<?php include __DIR__ . '/includes/templates/head.php'?>

<body>
    <div class="container">
        <h1>Strong Password Generator</h1>
        <h3>Genera una password sicura</h3>

        <!-- form -->
        <?php include __DIR__ . '/includes/templates/form.php'?>
        
    </div>
        
</body>
</html>