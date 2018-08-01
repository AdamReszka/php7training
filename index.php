<?php
# tablice asocjacyjne posiadają dane w formacie klucz wartość
$article = [
  'id' => 1,
  'title' => 'Wprowadzenie do Java',
  'author' => 'Adam Reszka'
];

$article['category'] = 'Webdev'; //tak dodajemy nowe pary klucz wartość
$article['views'] = 9547;

print_r($article);
echo $article['title']; //odwołanie się do pojedynczego klucza z tablicy
?>
