Title: 		Ilość wolnego miejsca  
Author:		Karol Kosiński  
Reviewer:	Krystian Duma  
			Karol Kosiński  
Date: 		19 Luty 2015  

# Sprawdzanie czy dany plik istnieje

Sprawdza czy plik istnieje, funkcja zwraca prawdę (`true`) lub fałsz (`false`).
Funkcja: `file_exists(/* Nazwa */)`

##Przykład:
Sprawdza czy istnieje, jeśli tak to zwraca wartość True.

	$nazwa = "index.php";
	$x = file_exists($nazwa);
	if($x)
		echo 'katalog jest';
