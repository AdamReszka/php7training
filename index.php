<?php
# konkatenacja
  $price = 899;
  $symbol = 'zł';

# operatorem łączenia w php nie jest + jak w JS tylko kropka
  echo 'Cena: ' . $price . $symbol;
  echo "Cena: $price$symbol"; //tak można też konkatenować ale musi być cudzysłów a nie apostrof
  $phrase = '"A to jest cytat z widocznym cudzysłowem"';
  $english = 'It\'s a bit like the difference between'; //użycie apostrofu z ukośnikiem by był interpretowany jako zwykły znak
?>
