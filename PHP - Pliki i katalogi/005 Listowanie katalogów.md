# 5. Listowanie Katalogów

Listowanie katalogów można dokonać na 2 sposoby:

1. można wykożystać zbiór funkcji powiązanych z `opendir()`
2. lub można wykożystać funkcję `glob()`


## `opendir()`






## `glob()`
W użyciu funkcja `glob()` jest łatwiejsza niż funkcje z grupy `opendir()`.
Funkcja `glob(WZÓR)` przyjmuje jako 1 parametr scieżkę do listowanego katalogu.
Zwraca tablicę zawierającą listę plików.

### Przykład 1
Poniższa funkcja zwróci listę wszystkich plików i folderów znajdujących się w aktualnym folderze 
(folder w którym znajduje się wykonywany skrypt)

        $x = glob('*');

### Przykład 2
Poniższa funkcja zwróci listę wszystkich plików i folderów znajdujących się w aktualnym folderze 
których  nazwy kończą się na `.php`

        $x = glob('*.php');

### Przykład 3
Poniższa funkcja zwróci listę wszystkich plików i folderów znajdujących się w w podfolderze `katalog`.  
**Uwaga: funkcja zwraca scieżki *relatywne*. np. `katalog/plik.txt`**

        $x = glob('katalog/*');