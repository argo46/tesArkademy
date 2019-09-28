<?php
    function is_username_valid($username){
        if(preg_match('/^[A-Za-z]{6}$/',$username)){
            return "true</br>";
        }else {
            return "false</br>";
        }
    }

    function is_password_valid($password){
        // if(preg_match('/^7[A-Za-z]{4,9}/',$password)){
        if(preg_match('/^7+(?=\S{4,9})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\W])\S*$/',$password)){
            return "true</br>";
        }else {
            return "false</br>";
        }
    }

    

    echo is_username_valid("coba12");
    echo is_username_valid("devina");
    echo "</br>";
    echo is_password_valid("p@ssW0rd9");
    echo is_password_valid("7Ark@demi");
?>