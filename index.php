<?php

    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $special_characters = '-&%!()=?_';
    $strong_password = '';

    if(!empty($_GET['password-length'])) {
        $length = $_GET['password-length'];
    };

    if(isset($length)) {

        for($i = 0; $i < $length; $i++) {

            $randInt = rand(0, 2);
            if($randInt === 0) {
                $strong_password .= getRandNum();
            } else if ($randInt === 1) {
                $strong_password .= getRandChar($characters);
            } else {
                $strong_password .= getRandChar($special_characters);
            };
            
        };

    };

    function getRandNum() {

        $randomNum = rand(0, 9);
        return $randomNum;

    };

    function getRandChar($characters) {

        $randInt = rand(0, strlen($characters));
        $randBool = rand(0, 1);
        if($randBool === 0) {
            $randomChar = substr($characters, $randInt, 1);
        } else {
            $randomChar = strtoupper(substr($characters, $randInt, 1));
        }
        return $randomChar;

    };

    function getRandSpecial($special_characters) {

        $randInt = rand(0, strlen($special_characters));
        $randomSpecial = substr($special_characters, $randInt, 1);
        return $randomSpecial;

    }

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

    <?php

        if(isset($length)) : ?>
            <p>La password generata è: <?php echo $strong_password ?></p>
        <?php endif;

    ?>
    
</body>
</html>