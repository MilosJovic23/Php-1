

<?php


    $cena = 500;
    $iznosPoreza = 0.2;

    $porez = $cena * $iznosPoreza;

    $ukupnaCena = $cena + $porez;

    echo "cena bez poreza: $cena <br> iznos poreza:$iznosPoreza<br> totalna cena: $ukupnaCena";

    $proizvod = "Hleb";
    echo "<br> $proizvod";
    $proizvod .= "sava";
    echo "<br> $proizvod <br>";
    $cenaProizvoda = 50;
    $cenaProizvoda += 5;
    echo "<br> $cenaProizvoda <br>";
?>