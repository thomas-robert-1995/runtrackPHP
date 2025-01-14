
<?php
/**
 * Déterminer si un nombre est premier
 * @param int $number nombre à tester
 * @return boolean
 */
function isPrime($number) {
    //boucle de 2 au nombre à tester
    for ($i = 2; $i < $number; $i++) {
        //test du qutotien de la division
        if ($number % $i == 0) {
            return FALSE;
        }
    }
 
    //Aucun diviseur trouvé, c'est un nombre permier
    return TRUE;
}
 
// boucle de 0 à 99
echo 'Nombre premier de 0 à 1000: ';
for ($i = 3; $i < 1000; $i++) {
    if (isPrime($i)) {
        echo $i.' ';
    }
}

