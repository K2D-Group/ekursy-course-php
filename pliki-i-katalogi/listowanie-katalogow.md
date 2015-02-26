Title: 		Listowanie Katalogów 
Author:		Krystian Duma  
Reviewer:	Krystian Duma  
			Karol Kosiński  
Date: 		19 Luty 2015  

# Listowanie Katalogów

Listowanie katalogów można dokonać na 2 sposoby:

1. można wykożystać zbiór funkcji powiązanych z `opendir()`
2. lub można wykożystać funkcję `glob()`


## `opendir()`

- `opendir(SCIEŻKA_DO_KATALOGU)` - Przyjmuje scieżkę względną (`../../katalog`) lub 
   bezwzględną (`/home/adm05/katalog`) do katalogu który chcesz listować.
   Funkcja zwraca *uchwyt* do katalogu.
-  `readdir(UCHWYT)` - Przyjmuje uchwyt zwrócony przez funkcję `opendir()` i zwraca następny plik w listowanym katalogu 
   lub zwraca `false` jeżeli zostały już zwrócone wszystkie pliki.
-  `closedir(UCHWYT)` - Zamyka katalog otwarty przez funkcję `opendir()`.

**Uwaga: funkcja `readdir()` zwraca również aktualny katalog (`.`) jak i katalog nadrzędny (`..`)**

### Przykład 1
Poniższy kod wyświetli dwa pierwsze pliki oraz aktualny katalog (`.`) i katalog nadrzędny (`..`)

```php
$uchwyt = opendir('katalog/');
echo 'Pierwszy plik: '.readdir($uchwyt);
echo 'Drugi plik: '.readdir($uchwyt);
echo 'Trzeci plik: '.readdir($uchwyt);
echo 'Czwarty plik: '.readdir($uchwyt);
closedir($uchwyt);
```

### Przykład 2
Poniższy kod wyświetli wszystkie pliki i katalogi znajdujące się w aktualnym katalogu 
(folder w którym znajduje się wykonywany skrypt)

```php
$uchwyt = opendir('');
while (false !== ($nazwa_pliku = readdir($uchwyt))) {
    echo $nazwa_pliku;
}
closedir($uchwyt);
```   

### Przykład 3
Poniższy kod to kod z przykładu 2 uzupełniona o kontrolę błędów

```php
if($uchwyt = opendir('.')) {
    while (false !== ($nazwa_pliku = readdir($uchwyt))) {
        echo $nazwa_pliku;
    }
    closedir($uchwyt);
}else{
    echo 'Nie można otworzyć katalogu!';
}
```

## `glob()`
W użyciu funkcja `glob()` jest łatwiejsza niż funkcje z grupy `opendir()`.
Funkcja `glob(WZÓR)` przyjmuje jako 1 parametr scieżkę do listowanego katalogu.
Zwraca tablicę zawierającą listę plików.

### Przykład 1
Poniższa funkcja zwróci listę wszystkich plików i folderów znajdujących się w aktualnym folderze 
(folder w którym znajduje się wykonywany skrypt)

```php
$x = glob('*');
```

### Przykład 2
Poniższa funkcja zwróci listę wszystkich plików i folderów znajdujących się w aktualnym folderze 
których  nazwy kończą się na `.php`

```php
$x = glob('*.php');
```

### Przykład 3
Poniższa funkcja zwróci listę wszystkich plików i folderów znajdujących się w w podfolderze `katalog`.  
**Uwaga: funkcja zwraca scieżki *relatywne*. np. `katalog/plik.txt`**

```php
$x = glob('katalog/*');
```