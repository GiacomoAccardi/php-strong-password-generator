<?php

    $check = null;

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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoolPassGen</title>
    <!-- importo Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- importo il mio css -->
    <link rel="stylesheet" href="./styles/style.css">

</head>

<body>
    <div class="wrapper vh-100 bg-dark">

        <header>
            <nav class="navbar bg-body-secondary px-3">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                    <img src="https://d92mrp7hetgfk.cloudfront.net/images/sites/misc/Boolean/original.png?1623187562" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                    BoolPassGen
                    </a>
                </div>
            </nav>
        </header>

        <div class="container">
            <div class="row">
                <div class="col-12">
                        <div class="content text-center">
                            <h1 class="text-secondary mt-4">Genera una password sicura!</h1>
                        </div>
                    <div class="form-wrap bg-body-secondary mt-5">
                            <form action="./index.php" method="GET">
                                <div class="row">
                                    <div class="col-8">
                                        <label for="" class="mt-2">Inserisci il numero di caratteri desiderati per la lunghezza della password</label>
                                    </div>
                                    <div class="col-2">
                                        <input type="text" id="passLength" name="passLength" class="form-control" placeholder="E.s: 8" class="length-select" maxlength="2">
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-outline-primary">Genera</button>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col12">

                                    <!-- inserirò qui il risultato -->
                                    <?php if($check == true){ ?>
                                    
                                        <div class="alert alert-success mt-5" role="alert">
                                        La tua password è: <?php echo $generatedPassword ?>
                                        </div>

                                    <?php } else if($check == false) { ?>
                                     
                                        <div class="alert alert-danger mt-5" role="alert">
                                        Inserisci un valore compreso tra 5 e 30!
                                        </div>

                                    <?php } else { 

                                    }?>

                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>

</html>