<?php
# tablice
$frameworks = array('Symphony','Zend','Laravel');
$frameworks2 = ['Symphony','Zend','Laravel']; // to jest nowszy sposób
//echo $frameworks; to nie zadziała na tablicę
//dodanie kolejnego elementu jest prostrze niż push z jsa a wygląda tak
$frameworks2[] = 'CakePHP';

print_r($frameworks); //print_r nadaje się do tablic
echo $frameworks[2]; //jeśli chcę sie odwołać do konkretnego elementu tablicy echo się nadaje
?>
