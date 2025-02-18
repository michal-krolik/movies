## Cel zadania
Napisz prostą aplikację w PHP do wyszukiwania rekomendacji filmów (wystarczy sama część backendowa). Lista filmów w formie tablicy jest dostarczona w pliku movies.php, możesz ją skopiować lub bezpośrednio dodać do Twojej aplikacji.

Aplikacja zawiera 3 algorytmy rekomendacji:

1) Zwracane są 3 losowe tytuły.
2) Zwracane są wszystkie filmy na literę ‘W’ ale tylko jeśli mają parzystą liczbę znaków w tytule.
3) Zwracany są wszystkie tytuły, które składają się z więcej niż 1 słowa.

Napisz testy jednostkowe, które sprawdzą poprawność rozwiązania.

## Metoda wykonania
Aplikacja działa na świeżej instancji frameworka Laravel w wersji 11.42.

Ze względu na brak szczegółowych wymagań co do sposobu rozwiązania zadania, zdecydowałem się na odseparowanie 3 algorytmów w osobnych metodach.
Dla uproszczenia kodu zawarłem je w modelu.

Aplikacja z poziomu interfejsu pozwala dowolnie włączać/wyłączać algorytmy, czyniąc cały mechanizm rekomendacji bardziej elastycznym i skalowalnym.

Ze względu na odseparowanie poszczególnych części składowych algorytmu, ich względną prostotę oraz zastosowanie interfejsu użytkownika, zdecydowałem się na użycie testów funkcjonalnych.

W celu zwiększenia czytelności wprowadzonych zmian commity w repozytorium zostały celowo pogrupowane w następujący sposób:
- [Implementacja funkcjonalności](https://github.com/michal-krolik/movies/commit/d6626fa2712acec111ba2c476c2e65d832a285b9)
- [Przygotowanie testów](https://github.com/michal-krolik/movies/commit/4059ec4f3f62e467a9c47f56d604c839d75440df)

## Czas wykonania
Przygotowanie funkcjonalności: 2h 50min  
Przygotowanie testów: 1h 30min  
**Łączny czas: 4h 20min** 

## Wersja demonstracyjna
Aplikację można zobaczyć pod adresem https://movies.mikrol.net/
