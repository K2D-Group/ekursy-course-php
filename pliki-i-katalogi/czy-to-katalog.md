Title: 		Czy to katalog?
Author:		Krystian Duma  
Reviewer:	Krystian Duma  
			Karol Kosiński  
Date: 		19-02-2015  

# Czy to katalog?

Do sprawdzania czy podana ścieżka dostępu jest katalogiem służy funkcja `is_dir(SCIEŻKA_DOSTĘPU)` a do sprawdzania czy jest plikiem służy funkcja `is_file(SCIEŻKA_DOSTĘPU)`, obie funkcje zwracają prawdę (`true`) lub fałsz (`false`).

## Przykład 1:
Sprawdza czy w katalogu w którym znajduje się uruchamiany skrypt znajduje się katalog o nazwie `CAT`.

		if(is_dir('CAT')){
			echo 'Podana ścieżka to katalog';
		}

## Przykład 2:
Sprawdza i wyświetla informacje czy ścieżka w zmiennej `$path` jest katalogiem lub plikiem.

        $path = '/home/adm05';
        if(is_dir($path)){
            echo 'Podana ścieżka to katalog';
        }elseif(is_file($path)){
            echo 'Podana ścieżka to plik';
        }else{
            echo 'Podana ścieżka to nie jest ani katalog ani plik (może nie istnieć)';
        }
