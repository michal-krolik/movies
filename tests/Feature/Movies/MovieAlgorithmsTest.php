<?php


namespace Movies;

use App\Models\Movie;
use Tests\TestCase;

class MovieAlgorithmsTest extends TestCase
{
    /**
     * Algorytm rekomendacji filmu nr 1
     * Zwracane są 3 losowe tytuły.
     */
    public function test_algorithm1()
    {
        // Seedowanie bazy danych testowymi filmami
        $this->seed();

        // Utworzenie zapytania z użyciem algorytmu
        $query = Movie::query();
        $query = Movie::algorithmNo1($query);
        $movies = $query->get();

        // Sprawdzenie czy wyniki zapytań zwracają przewidzianą liczbę rekordów
        $this->assertCount(3, $movies);
    }

    /**
     * Algorytm rekomendacji filmu nr 2
     * Zwracane są wszystkie filmy na literę ‘W’ ale tylko jeśli mają parzystą liczbę znaków w tytule.
     */
    public function test_algorithm2()
    {
        // Seedowanie bazy danych testowymi filmami
        $this->seed();

        // Utworzenie zapytania z użyciem algorytmu
        $query = Movie::query();
        $query = Movie::algorithmNo2($query);
        $movies = $query->get();

        // Sprawdzenie zwróconych przez algorytm filmów
        foreach ($movies as $movie) {
            // Czy wszystkie filmy zaczynają się na literę "W"
            $this->assertTrue(str_starts_with($movie->title, 'W'));

            // Czy tytuły wszystkich filmów mają parzystą liczbę znaków
            $this->assertTrue(strlen($movie->title) % 2 === 0);
        }
    }

    /**
     * Algorytm rekomendacji filmu nr 3
     * Zwracane są wszystkie tytuły, które składają się z więcej niż 1 słowa.
     */
    public function test_algorithm3()
    {
        // Seedowanie bazy danych testowymi filmami
        $this->seed();

        // Utworzenie zapytania z użyciem algorytmu
        $query = Movie::query();
        $query = Movie::algorithmNo3($query);
        $movies = $query->get();

        // Sprawdzenie zwróconych przez algorytm filmów
        foreach ($movies as $movie) {
            // Czy wszystkie tytuły mają więcej niż jedno słowo
            $this->assertTrue(count(explode(' ', $movie->title)) > 1);
        }
    }
}
