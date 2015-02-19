$Sprawdzanie czy dany plik istnieje

#Sprawdza czy plik istnieje, funkcja zwraca wartość logiczną T/F
#funkcja "file_exists(/* Nazwa */)

<?php

$nazwa = "index.php";
$x = file_exists($nazwa);
if($x)
echo 'katalog jest';


?>