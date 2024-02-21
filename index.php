<?php 

//funzioni
include __DIR__ . '/includes/functions/functions.php';

//arrays
include __DIR__ . '/includes/data/data.php';

$length = $_GET['length'] ?? '';

//quando ho inviato il form
if ($length) {
    //creo la password
    $password = create_random_password($length, $all_signs);

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
            
            <div class="d-flex align-items-center justify-content-between my-4">
                <label for="length">Lunghezza password:</label>
                <input type="number" class="form-input" id="length" name="length" value="<?= $length ?>">
            </div>
            
            <div class="buttons-container">
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="button" class="btn btn-secondary">Annulla</button>
            </div>
        </form>
    </div>
        
</body>
</html>