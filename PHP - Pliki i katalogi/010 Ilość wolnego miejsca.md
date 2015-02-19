# 9. Ilość wolnego miejsca

Funkcja sprawdza wolną przestrzeń w folderze.
Funkcja `disk_free_space(/* lokacja */)` w parametrze wstawiamy lokacje.
Funkcja zwraca wartość liczbową w bajtach.

##Przykład:
Program zwróci w bajtach ilość wolnego miejsca.

	$nazwa = "./";
	$x = disk_free_space($nazwa);
	echo $x;


