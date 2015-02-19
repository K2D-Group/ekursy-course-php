# 4. Zmiana nazwy

Do zmiany nazwy lub przenoszenia katalogów i plików służy funkcja `rename(STARA_ŚCIEŻKA, NOWA_ŚCIERZKA)`.
Funkcja zwraca prawdę (`true`) jeśli się powiedzie lub fałsz w przypadku błędu (`false`).


## Przykład 1.
Zmienia nazwę pliku `staryplik.txt` znajdującego się w miejscu gdzie znajduje się uruchamiany plik skrypt na `nowyplik.txt`.
		
		rename('staryplik.txt', 'nowyplik.txt');


## Przykład 2.
Zmienia nazwę pliku `staryplik.txt` znajdującego się w miejscu gdzie znajduje się uruchamiany plik skrypt na `nowyplik.txt`.
		
		rename('/home/adm05/Dokumenty', '/home/adm05/public_html/Dokumenty');
