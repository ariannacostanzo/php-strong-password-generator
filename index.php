<?php 

//funzioni
include __DIR__ . '/includes/functions/functions.php';

//arrays
include __DIR__ . '/includes/data/data.php';

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
    //creo la password
    $password = create_random_password($length, $all_signs, $repeat);

    session_start();
    $_SESSION['password'] = $password;

    //mi sposto nella pagina di successo
    header('Location: success.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <!-- bootstraap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
    <!-- stile -->
    <link rel="stylesheet" href="stile/style.css">
</head>
<body>
    <div class="container">
        <h1>Strong Password Generator</h1>
        <h3>Genera una password sicura</h3>

        

        <!-- form -->
        <form class="password-container" action="" method="GET">
            
            <!-- lunghezza password -->
            <div class="d-flex align-items-center justify-content-between my-4">
                <label for="length">Lunghezza password:</label>
                <input type="number" class="form-input" id="length" name="length" value="<?= $length ?>">
            </div>
            <!-- ripetizione -->
            <div class="d-flex align-items-center justify-content-between my-4">
                <label>Consenti ripetizioni di uno o più caratteri: </label>
                <div class="d-flex align-items-center gap-2">
                    <label for="rep-yes">Si</label>
                    <input type="radio" value="yes" id="rep-yes" name="repetition" <?= $repeat === 'yes' ? 'checked' : '' ?>>
                    <label for="rep-no">No</label>
                    <input type="radio" value="no" id="rep-no" name="repetition" <?= $repeat === 'no' ? 'checked' : '' ?>>
                </div>
            </div>
            <!-- caratteri -->
            <div class="d-flex align-items-center justify-content-between my-4">
                <label>Scegli che tipo di caratteri vuoi: </label>
                <div class="d-flex flex-column align-items-center gap-2">
                    <div>
                        <label for="letters">Lettere</label>
                        <input type="checkbox" id="letters" name="letters" >
                    </div>
                    <div>
                        <label for="numbers">Numeri</label>
                        <input type="checkbox" id="numbers" name="numbers">
                    </div>
                    <div>
                        <label for="symbols">Simboli</label>
                        <input type="checkbox" id="symbols" name="symbols">
                    </div>
                </div>
            </div>
            
            <div class="buttons-container">
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="button" class="btn btn-secondary">Annulla</button>
            </div>
        </form>
    </div>
        
</body>
</html>