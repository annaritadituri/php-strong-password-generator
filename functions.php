<?php

    function getRandNum() {

        $randomNum = rand(0, 9);
        return $randomNum;

    };

    function getRandChar($characters) {

        $randInt = rand(0, count($characters) - 1);
        $randBool = rand(0, 1);
        if($randBool === 0) {
            $randomChar = $characters[$randInt];
        } else {
            $randomChar = strtoupper($characters[$randInt]);
        }
        return $randomChar;

    };

    function getRandSpecial($special_characters) {

        $randInt = rand(0, strlen($special_characters) - 1);
        $randomSpecial = substr($special_characters, $randInt, 1);
        return $randomSpecial;

    };

    function generatePassword($length, $characters, $special_characters) {

        $strong_password = '';
        for($i = 0; $i < $length; $i++) {

            $randInt = rand(0, 2);
            if($randInt === 0) {
                $strong_password .= getRandNum();
            } else if ($randInt === 1) {
                $strong_password .= getRandChar($characters);
            } else {
                $strong_password .= getRandSpecial($special_characters);
            };
            
        };
        return $strong_password;

    };

?>