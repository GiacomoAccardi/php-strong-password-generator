<?php

function generatePassword($passwordLength, $charList){
    //creo una variabile per contenere la nuova password
    $password = '';   
    $charListLength = strlen($charList);

    // Genera una password lunga quanto specificato
    for ($i = 0; $i < $passwordLength; $i++) {
        // Seleziona un indice casuale dalla lista dei caratteri
        $randomIndex = random_int(0, $charListLength - 1);
        // Aggiunge il carattere corrispondente alla password
        $password .= $charList[$randomIndex];
    }
    return $password;
};

?>