<?php
  //statyczne wyświetlanie tekstu za pomocą konstrukcji językowej echo
  echo "Hello world";

  //definiowanie zmiennych za pomocą znaku $
  # nazwa zmiennej nigdy od liczby

  $price = 199;
  $name = 'Foxi';

  echo $name;
  echo($name);//to jest to samo

  $secondPrice = 240.99; //jesli jest ułamek zawsze stosujemy kropkę a nie przecinek
  $higherPrice = 270;
  $lowerPrice = 200;
  print $secondPrice; //print może pokazać tylko jedną wartość na raz a echo kilka

  echo $secondPrice," ",$higherPrice," ",$lowerPrice;

  # komentarze w php możemy wprowadzać także używając hasha
  /*
  a to jest
  komentarze
  wieloliniowy
  */
?>
