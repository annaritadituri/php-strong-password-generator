<?php

    session_start();
    if(empty($_SESSION['strong_password'])) {
        header('Location: ./index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generata</title>
</head>
<body>

    <h1>La tua password</h1>
    <p>La password generata è: <?php echo $_SESSION['strong_password'] ?></p>
    
</body>
</html>