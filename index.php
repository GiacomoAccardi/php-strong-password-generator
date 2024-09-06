<?php

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
            <nav class="navbar bg-body-secondary">
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
                                        <label for="" class="mt-1">Inserisci il numero di caratteri desiderati per la lunghezza della password</label>
                                    </div>
                                    <div class="col-2">
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="E.s: 8" class="length-select">
                                    </div>
                                    <div class="col-2">
                                        <button type="button" class="btn btn-outline-primary">Genera</button>
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