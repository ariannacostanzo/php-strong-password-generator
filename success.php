<?php 
session_start();
$password = $_SESSION['password'];
$length = $_SESSION['length'];
$repeat = $_SESSION['repeat'];
$title = 'Password Generated';
 
?>

<!DOCTYPE html>
<html lang="en">
<!-------------------------- head ------------------------------->
<?php include __DIR__ . '/includes/templates/head.php'?>
<body>
    <div class="container my-5">
        <!-- alert -->
        <?php if (isset($password)): ?>
            <div class="alert-container">
                <div class="alert alert-success px-3" role="alert">
                    <?= $password?>
                </div>
            </div>
        <?php endif ?>

        <a href="index.php">Crea una nuova password</a>

    </div>
</body>
</html>