Title: 		Zwracanie śceżki dostępu
Author:		Karol Kosiński  
Reviewer:	Krystian Duma  
			Karol Kosiński  
Date: 		19-02-2015  

# 8. Zwracanie śceżki dostępu

Funkcja `dirname(/* Nazwa */)` zwraca ścieżkę pliku.

##Przykład
Program wypiesze ścieżkę do istniejącego pliku.

```php
$nazwa = "index.php";
$sciezka = dirname($nazwa);
echo $sciezka;
```