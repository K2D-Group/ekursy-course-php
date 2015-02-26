Title: 		Ilość wolnego miejsca  
Author:		Karol Kosiński  
Reviewer:	Krystian Duma  
			Karol Kosiński  
Date: 		19 Luty 2015  

# Ilość wolnego miejsca

Funkcja sprawdza wolną przestrzeń w folderze.
Funkcja `disk_free_space(/* lokacja */)` w parametrze wstawiamy lokacje.
Funkcja zwraca wartość liczbową w bajtach.

##Przykład:
Program zwróci w bajtach ilość wolnego miejsca.

```php
$nazwa = "./";
$x = disk_free_space($nazwa);
echo $x;
```

