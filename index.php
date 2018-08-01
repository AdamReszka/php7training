<?php
# operatory arytmetyczne

$x = 7;
$y = 2;

// echo $x + $y . "<br />";
// echo $x - $y . "<br />";
// echo $x / $y . "<br />";
// echo $x * $y . "<br />";
// echo ($x + $y) * 2;

# modulo reszta z dzielenia

echo $x % $y . "<br />";

# podnoszenie do potęgi

echo $x ** $y . "<br />";

# zamiana na wartość ujemną

echo -$x . "<br />";

###################################### kombinowane operatory

$value = 10;
# $value = $value + 5; //nadpisywanie pierwotnej wartości jak to uprościć?
$value += 5; // -= *= /=
echo $value . "<br />" . "<br />";


###################################### inkrementacja i dekrementacja
#operator inkrementacji
$counter = 10;
$counter++; //tu następuje inkrementacja
echo $counter . "<br />";
$counter--; //tu następuje dekrementacja
echo $counter;
?>
