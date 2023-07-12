<?php
//% Variabili
    //$number = 10; // Definizione di una variabile
    //echo $number; // Mostrare la variabile

    // Esempi di identificatori validi
   /*  $nome;
    $_età;
    $indirizzo_1;
    $NumeroCivico; */

//$ Tipizzazione dinamica

/* $new_number= 20; // number
$word = 'Ciao'; // string
echo $word; // Ciao
echo gettype($word); // string
echo gettype($new_number); // integer

//* Riassegnazione variabile
$word = -3.4; // number
echo $word; // -3.4
 */


//$ Assegnamento per valore o riferimento
//* Per valore

/* $name1 = 'Matteo'; // Matteo
$name2 = $name1; // Matteo
// echo $name1 . '<br>' . $name2 . '<br>';
// Riassegnazione
$name1 = 'Paolo';
echo $name1, $name2; //Matteo Paolo */


//* Per riferimento

/* $name1 = 'Matteo'; // Matteo
$name2 = &$name1; // Matteo
// echo $name1 . '<br>' . $name2 . '<br>';
// Riassegnazione
$name1 = 'Paolo';
echo $name1, $name2; //Paolo Paolo
 */


//% Costanti

/* define("NOME_COSTANTE", "Hello");
const NOME_COSTANTE_2 = " World";

echo NOME_COSTANTE, NOME_COSTANTE_2; */
// Hello World

//NOME_COSTANTE_2 = " Ciao";

/* const COSTANTE; // Errore
const CONSTANTE2 = 10; // OK */


//$ Costanti PHP built-in

//echo PHP_VERSION; // 8.2.4

//* Costanti magiche

//echo __DIR__ ; //C:\User\...