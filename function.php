<?php
    function generatePassword($selectNumber) {

      if (!(int)$selectNumber) {
        return null;
      }

    $charset  = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!?&%$<>^+-*/()[]{}@#_=';
    $password = str_shuffle($charset);
    $password = substr($password, 0, $selectNumber);

    return $password;
  }

?>