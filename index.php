<?php

    require_once __DIR__ . '/functions.php';

    session_start();

    $characters = range('a', 'z');
    $special_characters = '-&%!()=?_';
    $default_length = 8;

    if(!empty($_GET['password-length'])) {
        $length = $_GET['password-length'];
        if(intval($length) === 0) $length = $default_length;
    };

    if(isset($length)) {
        $strong_password = generatePassword($length, $characters, $special_characters);
        $_SESSION['strong_password'] = $strong_password;
        header('Location: ./password.php');
        die();
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
</head>
<body>

    <h1>Password Generator</h1>
    <form action="index.php" method="GET">
        <label for="input-number">Quanto deve essere lunga la tua password?</label>
        <input type="number" name="password-length" id="input-number">
    </form>
    
</body>
</html>