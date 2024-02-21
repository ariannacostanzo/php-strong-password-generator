<?php 

//funzione

//arrays divisi
$numbers = [1,2,3,4,5,6,7,8,9,0];
$letters_uppercase = range('A', 'Z');
$letters_lowercase = range('a', 'z');
$symbols = ['!', '.', '?', ',', '@', '#', '$', '%', '^', '&', '*'];

//array che ha tutto
$all_signs = [];

$all_signs = array_merge($numbers , $letters_uppercase , $letters_lowercase , $symbols);
var_dump($all_signs);







$length = $_GET['length'] ?? '';

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

        <form class="password-container" action="" method="GET">
            <div class="d-flex align-items-center justify-content-between my-4">
                <label for="length">Lunghezza password:</label>
                <input type="number" class="form-input" id="length" name="length">
            </div>
            
            <div class="buttons-container">
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="button" class="btn btn-secondary">Annulla</button>
            </div>
        </form>
    </div>
        
</body>
</html>