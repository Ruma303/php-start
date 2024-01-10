<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live coding: <?php echo 'php-start'; ?></title>
</head>
<body>
    <h1>HOME</h1>
    <!-- //% Sintassi PHP -->

    <?php
        echo "<h1>Siamo in PHP</h1>";
        EcHo 'Hello World<br>' ;
        ECHO "Hello World ";
        // Commento single-line
        #  Commento single-line
        /*
        dffgfdgs
        c'è una falla da sistemare
        */
    ?>


    <!-- PHP o HTML -->
    <h2><?= 'Hello World asdfas'; ?></h2>
    <?= '<h2>Hello World adasfd</h2>'; ?>


    <!-- Interruzione del codice -->
    <?php
    echo "<p>Codice eseguito</p>";
    exit;

    die();
    exit("Codice interrotto da exit.");

    die("Codice interrotto da die().");

    echo "Codice non eseguito.";
    ?>

</body>
</html>