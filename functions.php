<?php

if (isset($_GET['passLength'])) {
    // Se esiste, prendi il valore e fallo diventare un intero
    $passwordLength = intval($_GET['passLength']);
    //creo variabile contentente tutti i caratteri utilizzabili
    $charList = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-_+<>[]{}';

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

    // Controlla che la lunghezza sia valida
    if ($passwordLength > 5 && $passwordLength < 30) {
        $generatedPassword = generatePassword($passwordLength, $charList);
        $check = true;
    } else {
        $check = false;
    }
}

?>