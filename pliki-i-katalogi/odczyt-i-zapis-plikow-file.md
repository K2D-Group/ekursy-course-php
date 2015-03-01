Title: 		Odczyt i zapis plików - file\*  
Author:		Krystian Duma  
Reviewer:	Krystian Duma  
			Karol Kosiński  
Date: 		19-02-2015  

# Odczyt i zapis plików - file\*

## Odczyt
Odczytać można plik na 2 sposoby:

1. `file_get_contents(NAZWA_PLIKU)` - Funkcja przyjmuje jako parametr nazwę pliku do odczytania.
   Funkcja zwraca całą zawartość pliku.
2. `file(NAZWA_PLIKU)` - Funkcja przyjmuje jako parametr nazwę pliku do odczytania.
   Funkcja zwraca tablicę (1 linia w pliku to 1 indeks w tablicy)

### Przykład 1
W zmiennej `$zawartość` znajdzie się zawartość pliku `plik.txt`

```php
$zawartosc = file_get_contents('plik.txt');
```

## Zapis
Aby zapisać coś do pliku należy użyć funkcji `file_put_contents(NAZWA_PLIKU, TREŚĆ)` - Funkcja przyjmuje jako pierwszy
parametr nazwę pliku do zapisania a jako drugi treść do zapisania.
   
### Przykład 2
W pliku `nowy plik.txt` zostanie zapisany tekst `Ten tekst zostanie zapisany do pliku`.

```php
file_put_contents('nowy plik.txt', 'Ten tekst zostanie zapisany do pliku');
```