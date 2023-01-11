<?php
    function generatePassword($length) {
        $characters = array_merge(range('A', 'Z'), range('a', 'z'), range('A', 'Z'), range('0', '9'), array('!', '@', '#', '$', '%', '&', '^', '*'));
        $password = "";
        for ($i = 0; $i < $length; $i++){
        $password .= $characters[array_rand($characters)];

        }

        return $password;
    }