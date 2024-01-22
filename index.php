<?php
require "Alunno.php";

    //creazione array oggetti alunno
    $alunno = new Alunno("Mario", "Rossi", 18);
    $alunno2 = new Alunno("Luigi", "Verdi", 19);
    $alunno3 = new Alunno("Giovanni", "Bianchi", 20);
    $alunni = array($alunno, $alunno2, $alunno3);

    //stampa array
    foreach ($alunni as $alunno) {
        echo $alunno . "<br>";
    }
?>