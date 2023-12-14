<!-- PHP LOGIC -->
<?php

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Newsletter</title>
</head>

<body>
    <main>
        <div class="container justify-content-center">
            <!-- title -->
            <h3 class="text-center mt-5">Isciviti alla NewsLetter</h3>

            <!-- form -->
            <div class="row">
                <div class="col-5">
                    <form action="index.php" method="POST">
                        <label for="email">Inserisci qui la tua e-mail</label>
                        <input class="form-control mb-4" id="email" name="email" type="text">

                        <!-- button to send form -->

                        <button class="btn btn-primary text-center" type="submit">Invia</button>
                </div>


            </div>

            </form>
        </div>
    </main>

</body>

</html>