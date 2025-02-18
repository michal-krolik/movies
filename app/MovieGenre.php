<?php

namespace App;

use Illuminate\Support\Collection;

enum MovieGenre
{
    case action;
    case comedy;
    case drama;
    case fantasy;
    case horror;
    case thriller;

    /**
     * Zwraca kolekcję wszystkich gatunków filmowych
     *
     * @return Collection
     */
    public static function getGenreList(): Collection
    {
        return collect(self::cases())->pluck('name');
    }

    /**
     * Zwraca czytelną nazwę gatunku w języku polskim
     *
     * @return string
     * @throws \Exception
     */
    public function getLabel(): string
    {
        return match ($this->name) {
            'action' => 'Sensacyjny',
            'comedy' => 'Komedia',
            'drama' => 'Dramat',
            'fantasy' => 'Fantasy',
            'horror' => 'Horror',
            'thriller' => 'Thriller',
            default => throw new \Exception('Nieznany gatunek filmowy'),
        };
    }
}
