<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack-2</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <label for="name">Inserisci Nome:</label>
            <input type="text" name="name" id="name">
            <label for="email">Inserisci E-mail:</label>
            <input type="email" name="email" id="email">
            <label for="age">Inserisci la tua età:</label>
            <input type="number" name="age" id="age">
            <button type="submit">Invia</button>
        </form>
    </body>
</html>

<?php 

    if( empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["age"])) {
        echo "Inserisci i dati";
    } else {
        if(!(str_contains($_POST["email"], "@") && str_contains($_POST["email"], ".")) ) {
            echo "Inserisci l'email";
        } elseif( !is_numeric($_POST["age"])) {
            echo "inserisci l'eta'";
        } else {
            echo "Login effettuato!";
        }
    }

?>